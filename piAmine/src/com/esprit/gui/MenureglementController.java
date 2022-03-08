/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.gui;
import static com.sun.org.apache.xalan.internal.lib.ExsltDatetime.date;
import entities.Reglement;
import entities.Utilisateur;
import service.reglementservice;
import service.UtilisateurService;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.RadioButton;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TextField;
import javafx.scene.control.ToggleGroup;

import java.net.URL;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import static java.util.Collections.list;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.RadioButton;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.ToggleGroup;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.input.MouseEvent;
import javax.swing.JOptionPane;
import service.ActiviteService;
import javafx.scene.control.ComboBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Tooltip;
import javafx.stage.Stage;
import javax.xml.bind.Validator;
import org.controlsfx.validation.ValidationSupport;
import utils.MyDB;

/**
 * FXML Controller class
 *
 * @author thebejaoui
 */
public class MenureglementController implements Initializable {

    @FXML
    private Label label;
    @FXML
    private Label actanim;
    @FXML
    private ComboBox<Integer> comidpromp;
    @FXML
    private DatePicker dateop;
    @FXML
    private TextField montant;
    @FXML
    private TextField mdp;
    @FXML
    private DatePicker dateech;
    @FXML
    private TableView<Reglement> tab_reg;
    @FXML
    private TableColumn<Reglement, String> col_op;
    @FXML
    private TableColumn<Reglement, Float> col_montant;
    @FXML
    private TableColumn<Reglement, String> col_mode;
    @FXML
    private TableColumn<Reglement, String> col_ech;
    @FXML
    private RadioButton radioajout;
    @FXML
    private ToggleGroup arwa;
    @FXML
    private RadioButton radiomodif;
    @FXML
    private RadioButton radioconsult;
    @FXML
    private RadioButton radiosupp;
   
    @FXML
    private TextField rechact;
    @FXML
    private Button triactivite;
    @FXML
    private Button ajoutact;
    @FXML
    private Button suppact;
    @FXML
    private Button modifact;
    @FXML
    private Button annuleract;
    
    private Integer index = -1;
        ValidationSupport validationSupport = new ValidationSupport();

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
           PreparedStatement pst = null;
        Connection cnx = MyDB.getInstance().getConnexion();
        ObservableList<Integer> listacombo = FXCollections.observableArrayList();
        String req = "SELECT id_prop from utilisateur";
      
        try {
            pst = cnx.prepareStatement(req);
        } catch (SQLException ex) {
            Logger.getLogger(manuactiviteController.class.getName()).log(Level.SEVERE, null, ex);
        }
        ResultSet rs = null;
        try {
            rs = pst.executeQuery();
        } catch (SQLException ex) {
            Logger.getLogger(manuactiviteController.class.getName()).log(Level.SEVERE, null, ex);
        }
        try {
            while (rs.next()) {
                listacombo.add(rs.getInt("id_prop"));
            }
        } catch (SQLException ex) {
            Logger.getLogger(manuactiviteController.class.getName()).log(Level.SEVERE, null, ex);
        }
        comidpromp.setItems(listacombo);
    }    

    @FXML
    private void idpropcom(ActionEvent event) {
    }

    @FXML
    private void ajoutcheck(ActionEvent event) {
    }

    @FXML
    private void modifcheck(ActionEvent event) {
    }

    @FXML
    private void consultcheck(ActionEvent event) {
    }

    @FXML
    private void suppcheck(ActionEvent event) {
    }

    @FXML
    private void rechercheractivite(ActionEvent event) {
    }

    @FXML
    private void triactivite(ActionEvent event) {
    }

    @FXML
    private void ajoutactivite(javafx.event.ActionEvent mouseEvent)throws SQLException {
        if (mouseEvent.getSource() == ajoutact) {
      
           
            reglementservice as = new reglementservice();
     as.ajouter(new Reglement(comidpromp.getSelectionModel().getSelectedIndex(),Date.valueOf(dateop.getValue()),Float.parseFloat(montant.getText()),mdp.getText(),Date.valueOf(dateech.getValue())));
            JOptionPane.showMessageDialog(null, "Reglement Ajoutée");
             

           
          
           col_op.setCellValueFactory(new PropertyValueFactory<>("dateoperation"));
            col_montant.setCellValueFactory(new PropertyValueFactory<>("montant"));
            col_mode.setCellValueFactory(new PropertyValueFactory<>("modedepaiement"));
            col_ech.setCellValueFactory(new PropertyValueFactory<>("echeancier"));
            
            ObservableList<Reglement> list = as.getActiviteList();
            tab_reg.setItems(list);
            
            

          /*  id.setText(null);
            comidpromp.setPromptText(null);
            lib.setText(null);
            prix.setText(null);
            emp.setText(null);
            desc.setText(null);
            date.setValue(null);
            type.setText(null);
            avis.setText(null);*/
            
        
        
        
    }}

    @FXML
    private void supprimeractivite(ActionEvent event) {
    }

    @FXML
    private void modifieractivite(ActionEvent event) {
    }

    @FXML
    private void annuler(ActionEvent event) {
    }
    
}
