/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.gui;
import static com.sun.org.apache.xalan.internal.lib.ExsltDatetime.date;
import entities.Reglement;
import entities.Utilisateur;
import java.io.IOException;
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
    private TableColumn<Reglement, Date> col_op;
    @FXML
    private TableColumn<Reglement, Float> col_montant;
    @FXML
    private TableColumn<Reglement, String> col_mode;
    @FXML
    private TableColumn<Reglement, Date> col_ech;
        @FXML
    private TableColumn<Reglement,Integer> col_id;

    @FXML
    private TableColumn<Reglement,Integer> col_idprop;
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
         @FXML
    private TextField id;
             @FXML
    private Button mail;
    

    
    private Integer index = -1;
        ValidationSupport validationSupport = new ValidationSupport();

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
         try {
        reglementservice sa = new reglementservice();
           col_id.setCellValueFactory(new PropertyValueFactory<>("idreglement"));
//        col_idprop.setCellValueFactory(new PropertyValueFactory<>("id_prop"));
            col_op.setCellValueFactory(new PropertyValueFactory<>("dateoperation"));
            col_montant.setCellValueFactory(new PropertyValueFactory<>("montant"));
            col_mode.setCellValueFactory(new PropertyValueFactory<>("modedepaiement"));
            col_ech.setCellValueFactory(new PropertyValueFactory<>("echeancier"));
            ObservableList<Reglement> list = sa.getreglementList();
            tab_reg.setItems(list);
       } catch (SQLException ex) {
            Logger.getLogger(manuactiviteController.class.getName()).log(Level.SEVERE, null, ex);
       }
      
  
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
        label.setText("Ajout :)  ");

        label.setLayoutX(120);
        id.setEditable(false);
         comidpromp.setEditable(true);
        dateop.setEditable(true);
        montant.setEditable(true);
        mdp.setEditable(true);
        dateech.setEditable(true);
        
        ajoutact.setDisable(false);
        modifact.setDisable(true);
        suppact.setDisable(true);
        annuleract.setDisable(false);
        radiosupp.setSelected(false);
       
        radioconsult.setSelected(false);
        radiomodif.setSelected(false);
  id.setText(null);
            comidpromp.setPromptText(null);
            
            dateop.setValue(null);
            montant.setText(null);
            mdp.setText(null);
            dateech.setValue(null);
    }

    @FXML
    private void modifcheck(ActionEvent event) {
        label.setText("Modifier  :) ");
        label.setLayoutX(120);
        id.setEditable(true);
         comidpromp.setEditable(true);
        dateop.setEditable(true);
        montant.setEditable(true);
        mdp.setEditable(true);
        dateech.setEditable(true);
       
        
        ajoutact.setDisable(true);
        modifact.setDisable(false);
        suppact.setDisable(true);
        annuleract.setDisable(false);
        radiosupp.setSelected(false);
       
        radioconsult.setSelected(false);
        radioajout.setSelected(false);
         id.setText(null);
            comidpromp.setPromptText(null);
            
            dateop.setValue(null);
            montant.setText(null);
            mdp.setText(null);
            dateech.setValue(null);
    }

    @FXML
    private void consultcheck(ActionEvent event) {
        label.setText("Consulter :)  ");
        label.setLayoutX(120);
        id.setEditable(false);
         comidpromp.setEditable(false);
        dateop.setEditable(false);
        montant.setEditable(false);
        mdp.setEditable(false);
        dateech.setEditable(false);
       
        
        ajoutact.setDisable(true);
        modifact.setDisable(true);
        suppact.setDisable(true);
        annuleract.setDisable(true);
        radiosupp.setSelected(false);
       
        radiomodif.setSelected(false);
        radioajout.setSelected(false);
         id.setText(null);
            comidpromp.setPromptText(null);
            
            dateop.setValue(null);
            montant.setText(null);
            mdp.setText(null);
            dateech.setValue(null);
    }

    @FXML
    private void suppcheck(ActionEvent event) {
         label.setText("Supprimer :)  ");
        label.setLayoutX(120);
        id.setEditable(true);
         comidpromp.setEditable(false);
        dateop.setEditable(false);
        montant.setEditable(false);
        mdp.setEditable(false);
        dateech.setEditable(false);
       
        
        ajoutact.setDisable(true);
        modifact.setDisable(true);
        suppact.setDisable(false);
        annuleract.setDisable(false);
        radioconsult.setSelected(false);
       
        radiomodif.setSelected(false);
        radioajout.setSelected(false);
    id.setText(null);
            comidpromp.setPromptText(null);
            
            dateop.setValue(null);
            montant.setText(null);
            mdp.setText(null);
            dateech.setValue(null);
    }

    @FXML
    private void rechercheractivite() throws SQLException {
        reglementservice sa = new reglementservice();
      col_id.setCellValueFactory(new PropertyValueFactory<>("idreglement"));
          col_idprop.setCellValueFactory(new PropertyValueFactory<>("id_prop"));
            col_op.setCellValueFactory(new PropertyValueFactory<>("dateoperation"));
            col_montant.setCellValueFactory(new PropertyValueFactory<>("montant"));
            col_mode.setCellValueFactory(new PropertyValueFactory<>("modedepaiement"));
            col_ech.setCellValueFactory(new PropertyValueFactory<>("echeancier"));
          
       
            ObservableList<Reglement> list = sa.getActiviteList();
            tab_reg.setItems(list);
        //ObservableList<Article> list = FXCollections.observableArrayList();

        // Wrap the ObservableList in a FilteredList (initially display all data).
        FilteredList<Reglement> filteredData = new FilteredList<>(list, b -> true);
        // 2. Set the filter Predicate whenever the filter changes.
        rechact.textProperty().addListener((observable, oldValue, newValue) -> {
            filteredData.setPredicate((Reglement reglement) -> {
                // If filter text is empty, display all persons.

                if (newValue == null || newValue.isEmpty()) {
                    return true;
                }
                // Compare first name and last name of every person with filter text.
                String lowerCaseFilter = newValue.toLowerCase();

                if (String.valueOf(reglement.getMontant()).indexOf(lowerCaseFilter) != -1) {
                    return true; // Filter matches libelle
                } 
               
                else {
                    return false; // Does not match.
                }
            });
        });
        // 3. Wrap the FilteredList in a SortedList. 
        SortedList<Reglement> sortedData = new SortedList<>(filteredData);
        // 4. Bind the SortedList comparator to the TableView comparator.
        // 	  Otherwise, sorting the TableView would have no effect.
        sortedData.comparatorProperty().bind(tab_reg.comparatorProperty());

        // 5. Add sorted (and filtered) data to the table.
        tab_reg.setItems(sortedData);
    }

    @FXML
    private void triactivite(javafx.event.ActionEvent mouseEvent) throws SQLException{
         if (mouseEvent.getSource() == triactivite) {
           
            reglementservice sa = new reglementservice();
      col_id.setCellValueFactory(new PropertyValueFactory<>("idreglement"));
           col_idprop.setCellValueFactory(new PropertyValueFactory<>("id_prop"));
            col_op.setCellValueFactory(new PropertyValueFactory<>("dateoperation"));
            col_montant.setCellValueFactory(new PropertyValueFactory<>("montant"));
            col_mode.setCellValueFactory(new PropertyValueFactory<>("modedepaiement"));
            col_ech.setCellValueFactory(new PropertyValueFactory<>("echeancier"));
            ObservableList<Reglement> list = sa.triedate();
            tab_reg.setItems(list);
        }
    }

    @FXML
    private void ajoutactivite(javafx.event.ActionEvent mouseEvent)throws SQLException {
        if (mouseEvent.getSource() == ajoutact) {
      
           
            reglementservice as = new reglementservice();
     as.ajouter(new Reglement(comidpromp.getSelectionModel().getSelectedIndex(),Date.valueOf(dateop.getValue()),Float.parseFloat(montant.getText()),mdp.getText(),Date.valueOf(dateech.getValue())));
            JOptionPane.showMessageDialog(null, "Reglement Ajoutée");
             

           col_id.setCellValueFactory(new PropertyValueFactory<>("idreglement"));
           col_idprop.setCellValueFactory(new PropertyValueFactory<>("id_prop"));
            col_op.setCellValueFactory(new PropertyValueFactory<>("dateoperation"));
            col_montant.setCellValueFactory(new PropertyValueFactory<>("montant"));
            col_mode.setCellValueFactory(new PropertyValueFactory<>("modedepaiement"));
            col_ech.setCellValueFactory(new PropertyValueFactory<>("echeancier"));
          
       
            ObservableList<Reglement> list = as.getActiviteList();
            tab_reg.setItems(list);
            
            

          id.setText(null);
            comidpromp.setPromptText(null);
            
            dateop.setValue(null);
            montant.setText(null);
            mdp.setText(null);
            dateech.setValue(null);
            
        
        
        
    }}

    @FXML
    private void supprimeractivite( javafx.event.ActionEvent mouseEvent)throws SQLException {
        if (mouseEvent.getSource() == suppact) {

            reglementservice as = new reglementservice();
            as.supprimer(new Reglement(Integer.parseInt(id.getText())));
            JOptionPane.showMessageDialog(null, "reglement Supprimée");
           col_id.setCellValueFactory(new PropertyValueFactory<>("idreglement"));
           col_idprop.setCellValueFactory(new PropertyValueFactory<>("id_prop"));
            col_op.setCellValueFactory(new PropertyValueFactory<>("dateoperation"));
            col_montant.setCellValueFactory(new PropertyValueFactory<>("montant"));
            col_mode.setCellValueFactory(new PropertyValueFactory<>("modedepaiement"));
            col_ech.setCellValueFactory(new PropertyValueFactory<>("echeancier"));
           
            ObservableList<Reglement> list = as.getActiviteList();
            tab_reg.setItems(list);
            id.setText(null);
            comidpromp.setPromptText(null);
            dateop.setValue(null);
            montant.setText(null);
            mdp.setText(null);
            dateech.setValue(null);
            

        }

    }

    @FXML
    private void modifieractivite(javafx.event.ActionEvent mouseEvent)throws SQLException{
         if (mouseEvent.getSource() == modifact) {

            reglementservice as = new reglementservice();
            as.modifier(new Reglement(Integer.parseInt(id.getText()),comidpromp.getSelectionModel().getSelectedIndex(),Date.valueOf(dateop.getValue()),Float.parseFloat(montant.getText()),mdp.getText(),Date.valueOf(dateech.getValue())));
            JOptionPane.showMessageDialog(null, "reglement Modifiée");
            
          col_id.setCellValueFactory(new PropertyValueFactory<>("idreglement"));
           col_idprop.setCellValueFactory(new PropertyValueFactory<>("id_prop"));
            col_op.setCellValueFactory(new PropertyValueFactory<>("dateoperation"));
            col_montant.setCellValueFactory(new PropertyValueFactory<>("montant"));
            col_mode.setCellValueFactory(new PropertyValueFactory<>("modedepaiement"));
            col_ech.setCellValueFactory(new PropertyValueFactory<>("echeancier"));
           
            ObservableList<Reglement> list = as.getActiviteList();
            tab_reg.setItems(list);
           id.setText(null);
            comidpromp.setPromptText(null);
            
            dateop.setValue(null);
            montant.setText(null);
            mdp.setText(null);
            dateech.setValue(null);
           // dateech.setValue(null);
            
        }
    }

    @FXML
    private void annuler(ActionEvent event) {
        id.setText(null);
            comidpromp.setPromptText(null);
             dateop.setValue(null);
            montant.setText(null);
            mdp.setText(null);
            dateech.setValue(null);
    }
     @FXML
    void getSelected(MouseEvent event) {
       if ((radioajout.isSelected())) {
         label.setText("Consulter ");
        label.setLayoutX(120);
         id.setEditable(false);
       // idprop.setEditable(false);
        comidpromp.setEditable(false);
        dateop.setEditable(false);
        montant.setEditable(false);
        mdp.setEditable(false);
        dateech.setEditable(false);
        
        ajoutact.setDisable(true);
        modifact.setDisable(true);
        suppact.setDisable(true);
        annuleract.setDisable(true);
        radiosupp.setSelected(false);
        radioajout.setSelected(false);
        radiomodif.setSelected(false);
        
        
        
        
            id.setText(null);
            comidpromp.setPromptText(null);
            dateop.setValue(null);
            montant.setText(null);
            mdp.setText(null);
            dateech.setValue(null);

            int index = tab_reg.getSelectionModel().getSelectedIndex();
            if (index <= -1) {

                return;
            }
                              

          id.setText(col_id.getCellData(index).toString());
          // comidpromp.promptTextProperty(col_idprop.getCellData.toString());
        dateop.setValue(col_op.getCellData(index).toLocalDate());
          montant.setText(col_montant.getCellData(index).toString());
            mdp.setText(col_mode.getCellData(index).toString());
            dateech.setValue(col_ech.getCellData(index).toLocalDate());
           
            
           
      } else if ((radiomodif.isSelected())) {
              label.setText("modifier ");
        label.setLayoutX(100);
            int index = tab_reg.getSelectionModel().getSelectedIndex();
            if (index <= -1) {

                return;
            }
             id.setEditable(true);
       // idprop.setEditable(false);
        comidpromp.setEditable(true);
        dateop.setEditable(true);
        montant.setEditable(true);
        mdp.setEditable(true);
        dateech.setEditable(true);
        
        ajoutact.setDisable(true);
        modifact.setDisable(false);
        suppact.setDisable(true);
        annuleract.setDisable(false);
        radiosupp.setSelected(false);
        radioajout.setSelected(false);
        radiomodif.setSelected(false);
        
        
        
        
            id.setText(null);
            comidpromp.setPromptText(null);
            dateop.setValue(null);
            montant.setText(null);
            mdp.setText(null);
            dateech.setValue(null);
          
  
          // idprop.setText(col_idprop.getCellData(index).toString());
            id.setText(col_id.getCellData(index).toString());
          // comidpromp.promptTextProperty(col_idprop.getCellData.toString());
          dateop.setValue(col_op.getCellData(index).toLocalDate());
          montant.setText(col_montant.getCellData(index).toString());
          mdp.setText(col_mode.getCellData(index).toString());
           dateech.setValue(col_ech.getCellData(index).toLocalDate());

        } else if ((radiosupp.isSelected())) {
             label.setText("suppression ");
        label.setLayoutX(100);
            int index = tab_reg.getSelectionModel().getSelectedIndex();
            if (index <= -1) {

                return;
            }
             id.setEditable(true);
       // idprop.setEditable(false);
        comidpromp.setEditable(false);
        dateop.setEditable(false);
        montant.setEditable(false);
        mdp.setEditable(false);
        dateech.setEditable(false);
        
        ajoutact.setDisable(true);
        modifact.setDisable(true);
        suppact.setDisable(false);
        annuleract.setDisable(false);
        radiosupp.setSelected(false);
        radioajout.setSelected(false);
        radiomodif.setSelected(false);
            

   id.setText(col_id.getCellData(index).toString());
          // comidpromp.promptTextProperty(col_idprop.getCellData.toString());
          dateop.setValue(col_op.getCellData(index).toLocalDate());
          montant.setText(col_montant.getCellData(index).toString());
            mdp.setText(col_mode.getCellData(index).toString());
            dateech.setValue(col_ech.getCellData(index).toLocalDate());


          

        }
 else  {
             label.setText("Consulter ");
        label.setLayoutX(100);
            int index = tab_reg.getSelectionModel().getSelectedIndex();
            if (index <= -1) {

                return;
            }
            
            id.setEditable(false);
       // idprop.setEditable(false);
        comidpromp.setEditable(false);
        dateop.setEditable(false);
        montant.setEditable(false);
        mdp.setEditable(false);
        dateech.setEditable(false);
        
        ajoutact.setDisable(true);
        modifact.setDisable(true);
        suppact.setDisable(true);
        annuleract.setDisable(true);
        radiosupp.setSelected(false);
        radioajout.setSelected(false);
        radiomodif.setSelected(false);
           
           

    id.setText(col_id.getCellData(index).toString());
          // comidpromp.promptTextProperty(col_idprop.getCellData.toString());
          dateop.setValue(col_op.getCellData(index).toLocalDate());
          montant.setText(col_montant.getCellData(index).toString());
            mdp.setText(col_mode.getCellData(index).toString());
            dateech.setValue(col_ech.getCellData(index).toLocalDate());


          

        
    
}
    }
    
     @FXML
    void sendmail(javafx.event.ActionEvent mouseEvent) throws SQLException {
        if (mouseEvent.getSource() == mail) {

            try {
                Parent root = FXMLLoader.load(getClass().getResource("mailing.fxml"));
                Stage stage = new Stage();
                stage.setScene(new Scene(root));
                stage.setTitle("GameOfDrone");
                stage.show();

            } catch (IOException ex) {
                Logger.getLogger(MenureglementController.class.getName()).log(Level.SEVERE, null, ex);
            }
        }

    }
    
    
    
    
    
    
    
    
    
    
    
}
