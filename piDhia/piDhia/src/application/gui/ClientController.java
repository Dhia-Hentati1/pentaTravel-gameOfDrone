/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package application.gui;

import com.itextpdf.text.BaseColor;
import com.itextpdf.text.Document;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Font;
import com.itextpdf.text.FontFactory;
import com.itextpdf.text.Paragraph;
import com.itextpdf.text.pdf.PdfWriter;
import com.sun.org.apache.xerces.internal.util.URI;
import com.sun.org.apache.xerces.internal.util.URI.MalformedURIException;
import entities.Client;
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
import java.text.SimpleDateFormat;
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
import utils.MyDB;

/**
 * FXML Controller class
 *
 * @author 21629
 */
public class ClientController implements Initializable {

    Connection connexion;
    public PreparedStatement st;
    public ResultSet result;
    @FXML
    private TextField tfNom;
    @FXML
    private TextField tfNumero;
    @FXML
    private TextField tfCin;
    @FXML
    private Button btnUpdate;
    @FXML
    private Button btnDelete;
    @FXML
    private Button btnReset;
    @FXML
    private Button btnADD;
    @FXML
    private TableColumn<Client, Integer> cinID;
    @FXML
    private TableColumn<Client, String> cinNom;
    @FXML
    private TableColumn<Client, String> cinCin;
    @FXML
    private TableColumn<Client, String> cinNumero;
    @FXML
    private TextField tfSearch;
    @FXML
    private Button btnSearch;
    @FXML
    private TableView<Client> tableClient;
    public ObservableList<Client> data = FXCollections.observableArrayList();
    @FXML
    private Button btnImprimer;
    
    void imprimer()
    {  
       
    }

    public void showClient() {
        tableClient.getItems().clear();
        String sql = "select * from client";
        try {
            st = connexion.prepareStatement(sql);
            result = st.executeQuery();
            while (result.next()) {
                data.add(new Client(result.getInt("idc"), result.getString("nom"), result.getString("cin"), result.getString("telephone")));
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        cinID.setCellValueFactory(new PropertyValueFactory<Client, Integer>("idc"));
        cinNom.setCellValueFactory(new PropertyValueFactory<Client, String>("nom"));
        cinCin.setCellValueFactory(new PropertyValueFactory<Client, String>("cin"));
        cinNumero.setCellValueFactory(new PropertyValueFactory<Client, String>("telephone"));
        tableClient.setItems(data);

    }

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        connexion = MyDB.getInstance().getConnexion();
        showClient();
    }

    @FXML
    private void UpdateClient(ActionEvent event) {
        String nom = tfNom.getText();
        String cin = tfCin.getText();
        String telephone = tfNumero.getText();

        String sql = "update client set nom=? ,cin=? ,telephone=? where nom ='" + tfSearch.getText() + "'";

        if (!nom.equals("") && !cin.equals("") && !telephone.equals("")) {
            try {
                st = connexion.prepareStatement(sql);
                st.setString(1, nom);
                st.setString(2, cin);
                st.setString(3, telephone);
                st.executeUpdate(sql);
                resetData();
                Alert alert = new Alert(Alert.AlertType.CONFIRMATION, "client modifié avec succé", javafx.scene.control.ButtonType.OK);
                alert.showAndWait();
                showClient();
            } catch (SQLException ex) {
                System.out.println(ex.getMessage());
            }

        } else {
            Alert alert = new Alert(Alert.AlertType.WARNING, "veuillez remplir tous les champs", javafx.scene.control.ButtonType.OK);
            alert.showAndWait();

        }

    }

    @FXML
    private void DeleteClient(ActionEvent event) {
        String sql = "delete from client where nom='" + tfSearch.getText() + "'";
        try {
            st = connexion.prepareStatement(sql);
            st.executeUpdate();
            resetData();
            Alert alert = new Alert(Alert.AlertType.CONFIRMATION, "client supprimé avec succé", javafx.scene.control.ButtonType.OK);
            alert.showAndWait();
            showClient();
        } catch (SQLException ex) {
            Logger.getLogger(EtablissementController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void ResetClient(ActionEvent event) {
        showClient();
        resetData();
    }

    @FXML
    private void AddClient(ActionEvent event) {

        String nom = tfNom.getText();
        String cin = tfCin.getText();
        String telephone = tfNumero.getText();

        String sql = "insert into client(nom,cin,telephone) values(?,?,?)";
        if (!nom.equals("") && !cin.equals("") && !telephone.equals("")) {
            try {
                st = connexion.prepareStatement(sql);
                st.setString(1, nom);
                st.setString(2, cin);
                st.setString(3, telephone);
                st.execute();
                resetData();
                Alert alert = new Alert(Alert.AlertType.CONFIRMATION, "client ajouté avec succé", javafx.scene.control.ButtonType.OK);
                alert.showAndWait();
                st.close();
                resetData();
                showClient();
            } catch (SQLException ex) {
                System.out.println(ex.getMessage());
            }

        } else {
            Alert alert = new Alert(Alert.AlertType.WARNING, "veuillez remplir tous les champs", javafx.scene.control.ButtonType.OK);
            alert.showAndWait();

        }
    }

    @FXML
    private void searchClient(ActionEvent event) {

        String sql = "select * from client where nom= '" + tfSearch.getText() + "'";
        int m = 0;
        try {
            st = connexion.prepareStatement(sql);
            result = st.executeQuery();
            if (result.next()) {
                tfNom.setText(result.getString("nom"));
                tfCin.setText(result.getString("cin"));
                tfNumero.setText(result.getString("telephone"));
                m = 1;
                result.close();
                st.close();
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        if (m == 0) {
            Alert alert = new Alert(Alert.AlertType.ERROR, "aucun client trouvé avec ce nom =" + tfNom.getText() + "", javafx.scene.control.ButtonType.OK);
            alert.showAndWait();

        }
    }

    @FXML
    private void tableViewClient(MouseEvent event) {
        Client etablissement = tableClient.getSelectionModel().getSelectedItem();
        String sql = "select * from client where idc = ?";
        try {
            st = connexion.prepareStatement(sql);
            st.setInt(1, etablissement.getIdc());
            result = st.executeQuery();
            if (result.next()) {
                tfNom.setText(result.getString("nom"));
                tfCin.setText(result.getString("cin"));
                tfNumero.setText(result.getString("telephone"));
                tfSearch.setText(result.getString("nom"));
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    private void resetData() {

        tfNom.setText("");
        tfCin.setText("");
        tfNumero.setText("");

    }

    @FXML
    private void Imprime(ActionEvent event) {
        Document docu = new Document();
    try{
        PdfWriter.getInstance(docu, new FileOutputStream("facture.pdf"));
        docu.open();
        String format = "dd/mm/yy hh:mm";
        
        SimpleDateFormat formater =new SimpleDateFormat(format);
        java.util.Date date=new java.util.Date();
        docu.add(new Paragraph("Facture à : "+tfNom.getText()+""
        + "\n numero de cin:"+tfCin.getText()+""
        +"\n numero de telephone:"+tfNumero.getText()+""
        +"\n Fait à Tunis le :"+formater.format(date)+""
        +"\n signature :",FontFactory.getFont(FontFactory.TIMES_ROMAN,14,Font.NORMAL,BaseColor.BLACK)));
        docu.close();
        Desktop.getDesktop().open(new File("facture.pdf"));
    }catch (FileNotFoundException | DocumentException e)
    {
        e.printStackTrace();}
    
   /* catch (MalformedURIException e)
    {
        e.printStackTrace();}*/
    
    catch (IOException e)
    {
        e.printStackTrace();
    }
    }
}
