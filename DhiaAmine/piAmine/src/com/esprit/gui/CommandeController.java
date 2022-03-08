package com.esprit.gui;

import com.itextpdf.text.BaseColor;
import com.itextpdf.text.Document;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Font;
import com.itextpdf.text.FontFactory;
import com.itextpdf.text.Paragraph;
import com.itextpdf.text.pdf.PdfWriter;
import entities.Commande;
import java.awt.Desktop;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.text.SimpleDateFormat;
import java.util.Optional;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.stage.Modality;
import javafx.stage.Stage;
import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableModel;
import service.commandeService;
import utils.MyDB;

public class CommandeController implements Initializable {

    Connection connexion;
    public PreparedStatement st;
    public ResultSet result;
    Parent parent;
    Stage stage;
    @FXML
    private TextField tfID;

    @FXML
    private TextField tfPrix;

    @FXML
    private TextField tfEtat;

    @FXML
    private Button btnUpdate;

    @FXML
    private Button btnDelete;

    @FXML
    private Button btnReset;

    @FXML
    private Button btnADD;

    @FXML
    private TableView<Commande> tableCommande;

    @FXML
    private TableColumn<Commande, Integer> cinID;

    @FXML
    private TableColumn<Commande, Integer> cinIDPROP;

    @FXML
    private TableColumn<Commande, Integer> cinIDETA;

    @FXML
    private TableColumn<Commande, Float> cinPrix;

    @FXML
    private TableColumn<Commande, String> cinRECO;
    public ObservableList<Commande> data = FXCollections.observableArrayList();

    @FXML
    private TextField tfSearch;

    @FXML
    private Button btnSearch;

    @FXML
    private Button btnImprimer;

    @FXML
    private TextField tfRecom;

    @FXML
    public void showCommande() {
        tableCommande.getItems().clear();
        String sql = "select * from commande";
        try {
            st = connexion.prepareStatement(sql);
            result = st.executeQuery();
            while (result.next()) {
                data.add(new Commande(result.getInt("id"), result.getInt("id_prop"), result.getInt("ide"), result.getFloat("prix"), result.getString("description")));
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        cinID.setCellValueFactory(new PropertyValueFactory<Commande, Integer>("id"));
        cinIDPROP.setCellValueFactory(new PropertyValueFactory<Commande, Integer>("id_prop"));
        cinIDETA.setCellValueFactory(new PropertyValueFactory<Commande, Integer>("ide"));
        cinPrix.setCellValueFactory(new PropertyValueFactory<Commande, Float>("prix"));
        cinRECO.setCellValueFactory(new PropertyValueFactory<Commande, String>("description"));
        tableCommande.setItems(data);

    }

    @FXML
    void AddCommande(ActionEvent event) {
        int id_prop = Integer.parseInt(tfID.getText());
        int ide = Integer.parseInt(tfEtat.getText());
        float prix = Float.parseFloat(tfPrix.getText());
        String description = tfRecom.getText();

        String sql = "insert into commande(id_prop,ide,prix,description) values(?,?,?,?)";
        if (tfID.getText().matches("^[0-9]+$") && tfPrix.getText().matches("^[0-9]+$") && tfEtat.getText().matches("^[0-9]+$") && !description.equals("")) {
            try {
                st = connexion.prepareStatement(sql);
                st.setInt(1, id_prop);
                st.setInt(2, ide);
                st.setFloat(3, prix);
                st.setString(4, description);
                st.execute();
                resetData();
                Alert alert = new Alert(Alert.AlertType.CONFIRMATION, "commande ajoutée avec succé", javafx.scene.control.ButtonType.OK);
                alert.showAndWait();
                st.close();
                resetData();
            } catch (SQLException ex) {
                System.out.println(ex.getMessage());
            }

        } else {
            Alert alert = new Alert(Alert.AlertType.WARNING, "veuillez remplir tous les champs", javafx.scene.control.ButtonType.OK);
            alert.showAndWait();

        }
    }

    @FXML
    void DeleteCommande(ActionEvent event) {
        String sql = "delete from commande where id_prop='" + tfSearch.getText() + "'";
        Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.initOwner(stage);
        alert.initModality(Modality.WINDOW_MODAL);
        alert.setTitle("Delete \"" + tfSearch.getText() + "\"?");
        alert.setHeaderText("Delete \"" + tfSearch.getText() + "\"?");
        alert.setContentText("Are you sure you want to delete this command ?");
        Optional<ButtonType> result = alert.showAndWait();
        if (!result.isPresent() || result.get() != ButtonType.OK) {
            System.out.println("false");
        } else { try {
            st = connexion.prepareStatement(sql);
            st.executeUpdate();
            resetData();
             alert = new Alert(Alert.AlertType.CONFIRMATION, "commande supprimée avec succé", javafx.scene.control.ButtonType.OK);
            alert.showAndWait();
            showCommande();
        }catch (SQLException ex) {
            Logger.getLogger(CommandeController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
}

@FXML
    void GoToI(ActionEvent event) {
try {
            parent = FXMLLoader.load(getClass().getResource("/application/gui/etablissement.fxml"));

            Stage stage = new Stage();

            stage.setScene(new Scene(parent));
            stage.setTitle("Etablissement");
            stage.show();

        } catch (IOException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @FXML
    void Imprime(ActionEvent event) {
Document docu = new Document();
        try {
            PdfWriter.getInstance(docu, new FileOutputStream("facture.pdf"));
            docu.open();
            String format = "dd/mm/yy hh:mm";

            SimpleDateFormat formater = new SimpleDateFormat(format);
            java.util.Date date = new java.util.Date();
            docu.add(new Paragraph("Facture à : " + tfID.getText() + ""
                    + "\n id etablissement:" + tfEtat.getText() + ""
                    + "\n prix:" + tfPrix.getText() + ""
                    + "\n recommandation:" + tfRecom.getText() + ""        
                    + "\n Fait à Tunis le :" + formater.format(date) + ""
                    + "\n signature :", FontFactory.getFont(FontFactory.TIMES_ROMAN, 14, Font.NORMAL, BaseColor.BLACK)));
            docu.close();
            Desktop.getDesktop().open(new File("facture.pdf"));
        } catch (FileNotFoundException | DocumentException e) {
            e.printStackTrace();
        } /* catch (MalformedURIException e)
    {
        e.printStackTrace();}*/ catch (IOException e) {
            e.printStackTrace();
        }
    }

    @FXML
    void ResetCommande(ActionEvent event) {
        showCommande();
        resetData();
    }

    @FXML
    void UpdateCommande(ActionEvent event) {
        int id_prop = Integer.parseInt(tfID.getText());
        int ide = Integer.parseInt(tfEtat.getText());
        Float prix = Float.parseFloat(tfPrix.getText());
        String description = tfRecom.getText();

        if (tfID.getText().matches("^[0-9]+$") && tfEtat.getText().matches("^[0-9]+$") && !description.equals("")) {
            try {
                Statement smt = connexion.createStatement();
                smt.execute("update commande set  id_prop=" + id_prop + ",ide=" + ide + ",prix='" + prix + "',description='" + description + "' where id_prop='" + tfSearch.getText() + "'");
                resetData();
                Alert alert = new Alert(Alert.AlertType.CONFIRMATION, "commande modifiée avec succé", javafx.scene.control.ButtonType.OK);
                alert.showAndWait();
            } catch (SQLException ex) {
                System.out.println(ex.getMessage());
            }
        } else {
            Alert alert = new Alert(Alert.AlertType.WARNING, "veuillez remplir tous les champs", javafx.scene.control.ButtonType.OK);
            alert.showAndWait();
        }
    }

    @FXML
    void searchCommande(ActionEvent event) {
        String sql = "select * from commande where id_prop= '" + tfSearch.getText() + "'";
        int m = 0;
        try {
            st = connexion.prepareStatement(sql);
            result = st.executeQuery();
            if (result.next()) {
                tfID.setText(result.getString("id_prop"));
                tfEtat.setText(result.getString("ide"));
                tfPrix.setText(result.getString("prix"));
                tfRecom.setText(result.getString("description"));
                m = 1;
                result.close();
                st.close();
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        if (m == 0) {
            Alert alert = new Alert(Alert.AlertType.ERROR, "aucune comande trouvée avec ce id =" + tfID.getText() + "", javafx.scene.control.ButtonType.OK);
            alert.showAndWait();
        }
    }

    @FXML
    void tableViewCommande() {
        /* Commande commande = tableCommande.getSelectionModel().getSelectedItem();
        String sql = "select * from commande where id_prop = ?";
        try {
            st = connexion.prepareStatement(sql);
            st.setInt(1, commande.getId());
            result = st.executeQuery();
            if (result.next()) {
                tfID.setText(result.getString("id_prop"));
                tfEtat.setText(result.getString("ide"));
                tfPrix.setText(result.getString("prix"));
                tfRecom.setText(result.getString("description"));
                tfSearch.setText(result.getString("id_prop"));
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
              
    }
       @Override
        public void initialize(URL url, ResourceBundle rb) {
        // TODO
        connexion = MyDB.getInstance().getConnexion();
        showCommande();
    }

    private void resetData() {

        tfID.setText("");
        tfEtat.setText("");
        tfPrix.setText("");
        tfRecom.setText("");
         tfSearch.setText("");

    }
}
