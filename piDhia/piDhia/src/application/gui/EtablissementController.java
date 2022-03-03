package application.gui;

import entities.Etablissement;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableModel;
import service.EtablissementService;
import utils.MyDB;

/**
 * FXML Controller class
 *
 * @author 21629
 */
public class EtablissementController implements Initializable {

    Connection connexion;
    public PreparedStatement st;
    public ResultSet result;
    @FXML
    private TextField tfID;
    @FXML
    private TextField tfNumero;
    @FXML
    private TextField tfType;
    @FXML
    private TextField tfNom;
    @FXML
    private TextField tfAdresse;
    @FXML
    private TextField tfDescription;
    @FXML
    private TextField tfAvis;
    @FXML
    private Button btnUpdate;
    @FXML
    private Button btnDelete;
    @FXML
    private Button btnReset;
    @FXML
    private Button btnADD;

    @FXML
    private TableView<Etablissement> tableEtablissement;
    @FXML
    private TableColumn<Etablissement, Integer> cinID;
    @FXML
    private TableColumn<Etablissement, Integer> cinIdProp;
    @FXML
    private TableColumn<Etablissement, Integer> cinNumero;
    @FXML
    private TableColumn<Etablissement, String> cinType;
    @FXML
    private TableColumn<Etablissement, String> cinNom;
    @FXML
    private TableColumn<Etablissement, String> cinAdresse;
    @FXML
    private TableColumn<Etablissement, String> cinDescription;
    @FXML
    private TableColumn<Etablissement, String> cinAvis;

    public ObservableList<Etablissement> data = FXCollections.observableArrayList();
    @FXML
    private TextField tfSearch;
    @FXML
    private Button btnSearch;

    /**
     * Initializes the controller class.
     */
    public void showEtablissement() {
        tableEtablissement.getItems().clear();
        String sql = "select * from etablissement";
        try {
            st = connexion.prepareStatement(sql);
            result = st.executeQuery();
            while (result.next()) {
                data.add(new Etablissement(result.getInt("ide"), result.getInt("id_prop"), result.getInt("numero"), result.getString("type"), result.getString("nom"), result.getString("adresse"), result.getString("description"), result.getString("avis")));
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        cinID.setCellValueFactory(new PropertyValueFactory<Etablissement, Integer>("ide"));
        cinIdProp.setCellValueFactory(new PropertyValueFactory<Etablissement, Integer>("id_prop"));
        cinNumero.setCellValueFactory(new PropertyValueFactory<Etablissement, Integer>("numero"));
        cinType.setCellValueFactory(new PropertyValueFactory<Etablissement, String>("type"));
        cinNom.setCellValueFactory(new PropertyValueFactory<Etablissement, String>("nom"));
        cinAdresse.setCellValueFactory(new PropertyValueFactory<Etablissement, String>("adresse"));
        cinDescription.setCellValueFactory(new PropertyValueFactory<Etablissement, String>("description"));
        cinAvis.setCellValueFactory(new PropertyValueFactory<Etablissement, String>("avis"));
        tableEtablissement.setItems(data);

    }

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        connexion = MyDB.getInstance().getConnexion();
        showEtablissement();
// TODO
    }

    @FXML
    private void AddEtablissement(ActionEvent event) {
        int id_prop = Integer.parseInt(tfID.getText());
        int numero = Integer.parseInt(tfNumero.getText());
        String type = tfType.getText();
        String nom = tfNom.getText();
        String adresse = tfAdresse.getText();
        String description = tfDescription.getText();
        String avis = tfAvis.getText();

        String sql = "insert into etablissement(id_prop,numero,type,nom,adresse,description,avis) values(?,?,?,?,?,?,?)";
        if (!tfID.getText().equals("") && !tfNumero.getText().equals("") && !nom.equals("") && !adresse.equals("") && !type.equals("") && !description.equals("") && !avis.equals("")) {
            try {
                st = connexion.prepareStatement(sql);
                st.setInt(1, id_prop);
                st.setInt(2, numero);
                st.setString(3, type);
                st.setString(4, nom);
                st.setString(5, adresse);
                st.setString(6, description);
                st.setString(7, avis);
                st.execute();
                resetData();
                Alert alert = new Alert(Alert.AlertType.CONFIRMATION, "etablissement ajouté avec succé", javafx.scene.control.ButtonType.OK);
                alert.showAndWait();
                setEtablissementTableData();
                st.close();
                resetData();
                //Etablissement E = new Etablissement(id_prop, numero, type, nom, adresse, description, avis);
                //EtablissementService ec = new EtablissementService();
                //ec.ajouter(E);
            } catch (SQLException ex) {
                System.out.println(ex.getMessage());
            }

        } else {
            Alert alert = new Alert(Alert.AlertType.WARNING, "veuillez remplir tous les champs", javafx.scene.control.ButtonType.OK);
            alert.showAndWait();

        }
    }

    @FXML
    private void UpdateEtablissement(ActionEvent event) {
        //EtablissementService as = new EtablissementService();
        int id_prop = Integer.parseInt(tfID.getText());
        int numero = Integer.parseInt(tfNumero.getText());
        String type = tfType.getText();
        String nom = tfNom.getText();
        String adresse = tfAdresse.getText();
        String description = tfDescription.getText();
        String avis = tfAvis.getText();
        String sql = "update etablissement set id_prop=? ,numero=? ,type=? ,nom=? ,adresse=? ,description=? ,avis=? where nom='" + tfSearch.getText() + "'";
        setEtablissementTableData();
        //resetData();
        try {
           // Statement st = connexion.createStatement();
            //st.execute("update etablissement set  id_prop=" + id_prop + ",numero=" + numero + ",type='" + type + "',nom='" + nom + "',adresse='" + adresse + "',description='" + description + "',avis='" + avis + "', where nom='" + tfSearch.getText() + "'");
            st = connexion.prepareStatement(sql);
            st.setInt(1, id_prop);
            st.setInt(2, numero);
            st.setString(3, type);
            st.setString(4, nom);
            st.setString(5, adresse);
            st.setString(6, description);
            st.setString(7, avis);
            st.executeUpdate(sql);
            resetData();
            Alert alert = new Alert(Alert.AlertType.CONFIRMATION, "etablissement modifié avec succé", javafx.scene.control.ButtonType.OK);
            alert.showAndWait();

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

        /* if (!tfID.getText().equals("") && !tfNumero.getText().equals("") && !nom.equals("") && !adresse.equals("") && !type.equals("") && !description.equals("") && !avis.equals("")) {
            try {
                st = connexion.prepareStatement(sql);
                st.setInt(1, id_prop);
                st.setInt(2, numero);
                st.setString(3, type);
                st.setString(4, nom);
                st.setString(5, adresse);
                st.setString(6, description);
                st.setString(7, avis);
                st.execute();
                resetData();
                Alert alert = new Alert(Alert.AlertType.CONFIRMATION, "etablissement modifié avec succé", javafx.scene.control.ButtonType.OK);
                alert.showAndWait();

            } catch (SQLException ex) {
                System.out.println(ex.getMessage());
            }

        } else {
            Alert alert = new Alert(Alert.AlertType.WARNING, "veuillez remplir tous les champs", javafx.scene.control.ButtonType.OK);
            alert.showAndWait();

        }
         */
    }

    @FXML
    private void DeleteEtablissement(ActionEvent event) {
        /*EtablissementService as = new EtablissementService();
            try {
            as.supprimer(new Etablissement(11));
            
            } catch (SQLException ex) {
            System.out.println(ex.getMessage());
            }*/
        String sql = "delete from etablissement where nom='" + tfSearch.getText() + "'";
        try {
            st = connexion.prepareStatement(sql);
            st.executeUpdate();
            resetData();
            Alert alert = new Alert(Alert.AlertType.CONFIRMATION, "etablissement supprimé avec succé", javafx.scene.control.ButtonType.OK);
            alert.showAndWait();
            showEtablissement();
        } catch (SQLException ex) {
            Logger.getLogger(EtablissementController.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    @FXML
    private void ResetEtablissement(ActionEvent event) {
        showEtablissement();
        resetData();

    }

    @FXML
    private void tableViewEtablissement() {
        Etablissement etablissement = tableEtablissement.getSelectionModel().getSelectedItem();
        String sql = "select * from etablissement where ide = ?";
        try {
            st = connexion.prepareStatement(sql);
            st.setInt(1, etablissement.getIde());
            result = st.executeQuery();
            if (result.next()) {
                tfID.setText(result.getString("id_prop"));
                tfNumero.setText(result.getString("numero"));
                tfType.setText(result.getString("type"));
                tfNom.setText(result.getString("nom"));
                tfAdresse.setText(result.getString("adresse"));
                tfDescription.setText(result.getString("description"));
                tfAvis.setText(result.getString("avis"));
                tfSearch.setText(result.getString("nom"));
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @FXML
    private void searchEtablissement(ActionEvent event) {

        String sql = "select * from etablissement where nom= '" + tfSearch.getText() + "'";
        int m = 0;
        try {
            st = connexion.prepareStatement(sql);
            result = st.executeQuery();
            if (result.next()) {

                tfID.setText(result.getString("id_prop"));
                tfNumero.setText(result.getString("numero"));
                tfType.setText(result.getString("type"));
                tfNom.setText(result.getString("nom"));
                tfAdresse.setText(result.getString("adresse"));
                tfDescription.setText(result.getString("description"));
                tfAvis.setText(result.getString("avis"));
                m = 1;
                result.close();
                st.close();

            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        if (m == 0) {
            Alert alert = new Alert(Alert.AlertType.ERROR, "aucun etablissement trouvé avec ce nom =" + tfNom.getText() + "", javafx.scene.control.ButtonType.OK);
            alert.showAndWait();

        }

    }

    private void setEtablissementTableData() {
        int rows = 0;
        int rowIndex = 0;
        try {
            Statement smt = connexion.createStatement();
            ResultSet rs2 = smt.executeQuery("select * from etablissement order by id desc");
            if (rs2.next()) {
                rs2.last();
                rows = rs2.getRow();
                rs2.beforeFirst();
            }
            String[][] data = new String[rows][8];
            while (rs2.next()) {
                data[rowIndex][0] = rs2.getInt(1) + "";
                data[rowIndex][1] = rs2.getInt(2) + "";
                data[rowIndex][2] = rs2.getString(3) + "";
                data[rowIndex][3] = rs2.getInt(4) + "";
                data[rowIndex][4] = rs2.getString(5) + "";
                data[rowIndex][5] = rs2.getString(6) + "";
                data[rowIndex][6] = rs2.getString(7) + "";
                data[rowIndex][7] = rs2.getString(8) + "";
                rowIndex++;
            }
            String[] cols = {"ID", "ID PROP", "ADRESSE", "NUMERO", "NOM", "TYPE", "DESCRIPTION_ETAB"};
            DefaultTableModel model = new DefaultTableModel(data, cols);
            //tableEtablissement.seti(model);
            //tableEtablissement.setItems();
            rs2.close();
            smt.close();
        } catch (Exception ex) {
            System.out.println(ex.getMessage());
        }
    }

    private void resetData() {
        tfID.setText("");
        tfNumero.setText("");
        tfType.setText("");
        tfNom.setText("");
        tfAdresse.setText("");
        tfDescription.setText("");
        tfAvis.setText("");
    }
}
