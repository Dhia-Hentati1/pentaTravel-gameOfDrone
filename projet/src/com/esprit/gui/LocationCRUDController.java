/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.gui;

import java.net.URL;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import entities.Locations;
import service.LocationsCRUD;

/**
 * FXML Controller class
 *
 * @author hanam
 */
public class LocationCRUDController implements Initializable {

    @FXML
    private TableView<Locations> tableLocation;
    @FXML
    private TextField prix;
    @FXML
    private TextField date;
    @FXML
    private TextField destination;
    @FXML
    private TextField duree;

    /**
     * Initializes the controller class.
     */
    
     boolean update = false;
     
     Locations l = new Locations () ; 
    @FXML
    private TextField Proprietaire;
    @FXML
    private TextField id_transport;
    
    void initPage() {
      
        TableColumn idCol = new TableColumn("id");
        idCol.setMinWidth(100);
        idCol.setCellValueFactory(
                new PropertyValueFactory<Locations, String>("id"));

        TableColumn prixCol = new TableColumn("prix");
        prixCol.setMinWidth(100);
        prixCol.setCellValueFactory(
                new PropertyValueFactory<Locations, String>("prix"));

        TableColumn dateCol = new TableColumn("date");
        dateCol.setMinWidth(100);
        dateCol.setCellValueFactory(
                new PropertyValueFactory<Locations, String>("date"));

        TableColumn destinationCol = new TableColumn("destination");
        destinationCol.setMinWidth(100);
        destinationCol.setCellValueFactory(
                new PropertyValueFactory<Locations, String>("destination"));

        TableColumn dureeCol = new TableColumn("duree");
        dureeCol.setMinWidth(100);
        dureeCol.setCellValueFactory(
                new PropertyValueFactory<Locations, String>("duree"));
        
         TableColumn propcol = new TableColumn("prop");
        propcol.setMinWidth(100);
        propcol.setCellValueFactory(
                new PropertyValueFactory<Locations, String>("prop"));

        TableColumn prix_totalCol = new TableColumn("prix_total");
        prix_totalCol.setMinWidth(100);
        prix_totalCol.setCellValueFactory(
                new PropertyValueFactory<Locations, String>("prix_total"));

         TableColumn idTranslCol = new TableColumn("idTransport");
        idTranslCol.setMinWidth(100);
        idTranslCol.setCellValueFactory(
                new PropertyValueFactory<Locations, String>("idTransport"));

        tableLocation.getColumns().addAll(idCol, prixCol, dateCol, destinationCol, dureeCol, propcol, prix_totalCol , idTranslCol );
       // tableLocation.setItems(data);
       
       updateList();
      
    }
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
          initPage();
    }    

    @FXML
    private void AddLocationClicked(ActionEvent event) {
            LocationsCRUD sL = new LocationsCRUD();

        l.setDate(date.getText());
        l.setDestination(destination.getText());
        l.setDuree(Integer.parseInt(duree.getText()));
        l.setPrix(Float.parseFloat(prix.getText()));
        l.setId_prop(Integer.parseInt(Proprietaire.getText()));
        l.setId_transport(Integer.parseInt(id_transport.getText()));

        if (update) {
            sL.modifierLocations(l);
            Proprietaire.setText("");
            date.setText("");
            destination.setText("");
            duree.setText("");
            prix.setText("");
            id_transport.setText("");

        } else {
            sL.ajouterLocations(l);
        }
         updateList();
        Empty();
    }

    @FXML
    private void UpdateLocationClicked(ActionEvent event) {
    
     l = (Locations) tableLocation.getSelectionModel().getSelectedItem();

        l.setDate(date.getText());
        l.setDestination(destination.getText());
        l.setDuree(Integer.parseInt(duree.getText()));
        l.setPrix(Float.parseFloat(prix.getText()));
        l.setId_prop(Integer.parseInt(Proprietaire.getText()));
        l.setId_transport(Integer.parseInt(id_transport.getText()));
        update = true;
        System.out.println("in update");
        System.out.println(l);

        initPage();
        
    }
    

    @FXML
    private void DeleteLocationClicked(ActionEvent event) {
        
        l = (Locations) tableLocation.getSelectionModel().getSelectedItem();
        LocationsCRUD sA = new LocationsCRUD();

        sA.supprimerLocations(l.getId());
        initPage();
    }
    
     public void updateList() {
         LocationsCRUD sL = new LocationsCRUD();
       List list = sL.affichageLocations();
        System.out.println(list);
        ObservableList<Locations> listO = FXCollections.observableArrayList(list);

 tableLocation.setItems(listO);
    }
    
     private void Empty() {
       Proprietaire.setText("");
            date.setText("");
            destination.setText("");
            duree.setText("");
            prix.setText("");
            id_transport.setText("");
    }
    
}
