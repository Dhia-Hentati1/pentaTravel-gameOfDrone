/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package application.gui;

import entities.Etat;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.Observable;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.chart.PieChart.Data;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javax.swing.event.ListDataEvent;
import utils.MyDB;

/**
 * FXML Controller class
 *
 * @author 21629
 */
public class EtatController implements Initializable {

    Connection connexion;
    public PreparedStatement st;
    public ResultSet result;
    @FXML
    private TextField tfID;
    @FXML
    private TextField tfNumero;
    @FXML
    private TextField tfAdresse;
    @FXML
    private TextField tfDescription;
    @FXML
    private Button btnUpdate;
    @FXML
    private Button btnDelete;
    @FXML
    private Button btnReset;
    @FXML
    private Button btnADD;
    @FXML
    private TableView<Etat> tableEtat;
    @FXML
    private TableColumn<Etat, Integer> cinID;
    @FXML
    private TableColumn<Etat, Integer> cinIdProp;
    @FXML
    private TableColumn<Etat, Integer> cinNumero;
    @FXML
    private TableColumn<Etat, String> cinRegion;
    @FXML
    private TableColumn<Etat, String> cinType;
    @FXML
    private TableColumn<Etat, String> cinMenu;
    @FXML
    private TableColumn<Etat, String> cinQuantite;
    @FXML
    private TableColumn<Etat, String> cinDescription;
    @FXML
    private TableColumn<Etat, String> cinAdresse;
    @FXML
    private TextField tfSearch;
    @FXML
    private Button btnSearch;
    @FXML
    private ComboBox<String> cbType;
    @FXML
    private ComboBox<String> cbMenu;
    @FXML
    private ComboBox<String> cbRegion;
    @FXML
    private ComboBox<String> cbQuantite;

    public ObservableList<Etat> data = FXCollections.observableArrayList();

    /**
     * Initializes the controller class.
     */
    public void showEtat() {
        tableEtat.getItems().clear();
        String sql = "select Ide, id_prop, numero, nomRegion, description, adresse from etat,region where etat.region=region.idRegion";
        try {
            st = connexion.prepareStatement(sql);
            result = st.executeQuery();
            while (result.next()) {
                data.add(new Etat(result.getInt(1), result.getInt(2), result.getInt(3), result.getString(4), result.getString(5), result.getString(6)));
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        cinID.setCellValueFactory(new PropertyValueFactory<Etat, Integer>("ide"));
        cinIdProp.setCellValueFactory(new PropertyValueFactory<Etat, Integer>("id_prop"));
        cinNumero.setCellValueFactory(new PropertyValueFactory<Etat, Integer>("numero"));
        cinRegion.setCellValueFactory(new PropertyValueFactory<Etat, String>("region"));
        cinDescription.setCellValueFactory(new PropertyValueFactory<Etat, String>("description"));
        cinAdresse.setCellValueFactory(new PropertyValueFactory<Etat, String>("adresse"));

        tableEtat.setItems(data);

    }

    @Override

    public void initialize(URL etat, ResourceBundle rb) {
        // TODO
        connexion = MyDB.getInstance().getConnexion();
        showEtat();
        remplirRegion();
        remplirType();
        remplirMenu();

    }

    @FXML
    private void UpdateEtat(ActionEvent event) {
    }

    @FXML
    private void deleteEtat(ActionEvent event) {
    }

    @FXML
    private void resetEtat(ActionEvent event) {
    }

    @FXML
    private void AddEtat(ActionEvent event) {
        String id_pro = tfID.getText();
        int id_prop = Integer.parseInt(id_pro);
        String num = tfNumero.getText();
        int numero = Integer.parseInt(num);
        String description = tfDescription.getText();
        String adresse = tfAdresse.getText();
        String reg = cbRegion.getValue();
        String sql1 = "select idRegion from region where nomRegion='" + reg + "'";
        int region = 0;
        try {
            st = connexion.prepareStatement(sql1);
            result = st.executeQuery();
            while (result.next()) {
                region = result.getInt("idRegion");
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

        String typ = cbType.getValue();
        String sql2 = "select idType from type where nomType='" + typ + "'";
        int type = 0;
        try {
            st = connexion.prepareStatement(sql2);
            result = st.executeQuery();
            while (result.next()) {
                type = result.getInt("idType");
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

        String men = cbMenu.getValue();
        String sql3 = "select idMenu from menu where nomMenu='" + men + "'";
        int menu = 0;
        try {
            st = connexion.prepareStatement(sql3);
            result = st.executeQuery();
            while (result.next()) {
                menu = result.getInt("idMenu");
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

        String qt = cbQuantite.getValue();
        String sql4 = "select idQuantite from quantite where quantite='" + qt + "'";
        int quantite = 0;
        try {
            st = connexion.prepareStatement(sql4);
            result = st.executeQuery();
            while (result.next()) {
                quantite = result.getInt("idQuantite");
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

        String sql = "insert into etat (id_prop, numero, nomRegion,nomType,nomMenu,quantite, description, adresse) values (?,?,?,?,?,?,?,?)";
        try {
            st = connexion.prepareStatement(sql);
            st.setInt(1, id_prop);
            st.setInt(2, numero);
            st.setInt(3, region);
            st.setInt(4, type);
            st.setInt(5, menu);
            st.setInt(6, quantite);
            st.setString(7, description);
            st.setString(8, adresse);
            st.executeUpdate();
            showEtat();
            tfID.setText("");
            tfNumero.setText("");
            tfDescription.setText("");
            tfAdresse.setText("");
            tfSearch.setText("");
            cbRegion.setValue("region");
            cbType.setValue("type");
            cbMenu.setValue("menu");
            cbQuantite.setValue("quantite");
            Alert alert = new Alert(Alert.AlertType.CONFIRMATION, "etatblissement ajouté", javafx.scene.control.ButtonType.OK);
            alert.showAndWait();
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @FXML
    private void tableViewEtat(MouseEvent event) {
        //remplir combox quantite
        String sql = "select quantite from quantite";
        List<String> qt = new ArrayList<String>();
        try {
            st = connexion.prepareStatement(sql);
            result = st.executeQuery();
            while (result.next()) {
                qt.add(result.getString("quantite"));
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        cbQuantite.setItems(FXCollections.observableArrayList(qt));
        //remplir combox menu
        String sql1 = "select nomMenu from menu";
        List<String> menus = new ArrayList<String>();
        try {
            st = connexion.prepareStatement(sql1);
            result = st.executeQuery();
            while (result.next()) {
                menus.add(result.getString("nomMenu"));
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        cbMenu.setItems(FXCollections.observableArrayList(menus));

        //remplir combox type
        String sql2 = "select nomType from type";
        List<String> types = new ArrayList<String>();
        try {
            st = connexion.prepareStatement(sql2);
            result = st.executeQuery();
            while (result.next()) {
                types.add(result.getString("nomType"));
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        cbType.setItems(FXCollections.observableArrayList(types));

        Etat etat = tableEtat.getSelectionModel().getSelectedItem();
        String sql12 = "select Ide, id_prop, numero, nomRegion,nomType,nomMenu,quantite, description, adresse from etat,region,type,menu,quantite where etat.region=region.idRegion and etat.type=type.idType and etat.menu=menu.idMenu and etat.quantite=quantite.idQuantite and ide=?";
        try {
            st = connexion.prepareStatement(sql12);
            //st.setInt(1, Etat.getId());
            result = st.executeQuery();
            while (result.next()) {
                int id = result.getInt("ide");
                tfSearch.setText(String.valueOf(id));
                int idp = result.getInt("id_prop");
                tfID.setText(String.valueOf(idp));
                int numero = result.getInt("numero");
                tfNumero.setText(String.valueOf(numero));
                String description = result.getString("description");
                tfDescription.setText(String.valueOf(description));
                String adresse = result.getString("adresse");
                tfAdresse.setText(String.valueOf(adresse));
                cbRegion.setValue(result.getString("nomRegion"));
                cbType.setValue(result.getString("nomType"));
                cbMenu.setValue(result.getString("nomMenu"));
                cbQuantite.setValue(result.getString("quantite"));

            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }

    @FXML
    private void searchEtat(ActionEvent event) {
    }

    @FXML
    private void remplirType() {
        String sql = "select nomType from type where region = (select idRegion from region where nomRegion ='" + cbRegion.getValue() + "')";
        List<String> types = new ArrayList<String>();
        try {
            st = connexion.prepareStatement(sql);
            result = st.executeQuery();
            while (result.next()) {
                types.add(result.getString("nomType"));
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        cbType.setItems(FXCollections.observableArrayList(types));
    }

    @FXML
    private void remplirMenu() {
        String sql = "select nomMenu from menu where type = (select idType from type where nomType ='" + cbType.getValue() + "')";
        List<String> menus = new ArrayList<String>();
        try {
            st = connexion.prepareStatement(sql);
            result = st.executeQuery();
            while (result.next()) {
                menus.add(result.getString("nomMenu"));
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        cbMenu.setItems(FXCollections.observableArrayList(menus));
    }

    @FXML
    private void remplirRegion() {
        String sql = "select nomRegion from region";
        List<String> regions = new ArrayList<String>();
        try {
            st = connexion.prepareStatement(sql);
            result = st.executeQuery();
            while (result.next()) {
                regions.add(result.getString("nomRegion"));
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        cbRegion.setItems(FXCollections.observableArrayList(regions));

    }

    @FXML
    private void remplirQuantite() {
        String sql = "select quantite from quantite where menu = (select idMenu from menu where nomMenu ='" + cbMenu.getValue() + "')";
        List<String> qt = new ArrayList<String>();
        try {
            st = connexion.prepareStatement(sql);
            result = st.executeQuery();
            while (result.next()) {
                qt.add(result.getString("quantite"));
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        cbQuantite.setItems(FXCollections.observableArrayList(qt));
    }

}
