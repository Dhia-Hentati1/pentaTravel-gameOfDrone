/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.gui;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author thebejaoui
 */
public class MenuallController implements Initializable {

    @FXML
    private Button activite;
    @FXML
    private Button agence;
    @FXML
    private Button commande;
    @FXML
    private Button etablissement;
    @FXML
    private Button hotel;
    @FXML
    private Button location;
    @FXML
    private Button reglement;
    @FXML
    private Button resrvation;
    @FXML
    private Button transport;
    @FXML
    private Button vol;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void activite(ActionEvent event) throws IOException {
      
        Parent root = FXMLLoader.load(getClass().getResource("manuactivite.fxml"));
        Stage stage = new Stage();
        stage.setScene(new Scene(root));
        stage.setTitle("GameOfDrone");
        stage.show();
        

    }

    @FXML
    private void agence(ActionEvent event) throws IOException {
          
        Parent root = FXMLLoader.load(getClass().getResource("AgenceCRUD.fxml"));
        Stage stage = new Stage();
        stage.setScene(new Scene(root));
        stage.setTitle("GameOfDrone");
        stage.show();
    }

    @FXML
    private void commande(ActionEvent event) throws IOException {
          
        Parent root = FXMLLoader.load(getClass().getResource("commande.fxml"));
        Stage stage = new Stage();
        stage.setScene(new Scene(root));
        stage.setTitle("GameOfDrone");
        stage.show();
    }

    @FXML
    private void etablissement(ActionEvent event) throws IOException {
          
        Parent root = FXMLLoader.load(getClass().getResource("etablissement.fxml"));
        Stage stage = new Stage();
        stage.setScene(new Scene(root));
        stage.setTitle("GameOfDrone");
        stage.show();
    }

    @FXML
    private void hotel(ActionEvent event) throws IOException {
          
        Parent root = FXMLLoader.load(getClass().getResource("HotelCRUD.fxml"));
        Stage stage = new Stage();
        stage.setScene(new Scene(root));
        stage.setTitle("GameOfDrone");
        stage.show();
    }

    @FXML
    private void location(ActionEvent event) throws IOException {
          
        Parent root = FXMLLoader.load(getClass().getResource("LocationCRUD.fxml"));
        Stage stage = new Stage();
        stage.setScene(new Scene(root));
        stage.setTitle("GameOfDrone");
        stage.show();
    }

    @FXML
    private void reglement(ActionEvent event) throws IOException {
          
        Parent root = FXMLLoader.load(getClass().getResource("menureglement.fxml"));
        Stage stage = new Stage();
        stage.setScene(new Scene(root));
        stage.setTitle("GameOfDrone");
        stage.show();
    }

    @FXML
    private void resrvation(ActionEvent event) throws IOException {
          
        Parent root = FXMLLoader.load(getClass().getResource("ReservationCRUD.fxml"));
        Stage stage = new Stage();
        stage.setScene(new Scene(root));
        stage.setTitle("GameOfDrone");
        stage.show();
    }

    @FXML
    private void transport(ActionEvent event) throws IOException {
          
        Parent root = FXMLLoader.load(getClass().getResource("TransportCRUD.fxml"));
        Stage stage = new Stage();
        stage.setScene(new Scene(root));
        stage.setTitle("GameOfDrone");
        stage.show();
    }

    @FXML
    private void vol(ActionEvent event) throws IOException {
          
        Parent root = FXMLLoader.load(getClass().getResource("VolCRUD.fxml"));
        Stage stage = new Stage();
        stage.setScene(new Scene(root));
        stage.setTitle("GameOfDrone");
        stage.show();
    }
    
}
