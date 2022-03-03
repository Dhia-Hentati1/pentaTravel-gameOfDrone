/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.gui;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.RadioButton;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.ToggleGroup;
import javafx.scene.input.MouseEvent;

/**
 * FXML Controller class
 *
 * @author thebejaoui
 */
public class MenureglementController implements Initializable {

    @FXML
    private TextField rechact;
    @FXML
    private TableView<?> tab_act;
    @FXML
    private TableColumn<?, ?> col_lib;
    @FXML
    private TableColumn<?, ?> col_prix;
    @FXML
    private TableColumn<?, ?> col_emp;
    @FXML
    private TableColumn<?, ?> col_desc;
    @FXML
    private TableColumn<?, ?> col_date;
    @FXML
    private TableColumn<?, ?> col_type;
    @FXML
    private TableColumn<?, ?> col_avis;
    @FXML
    private Button triactivite;
    @FXML
    private Button modifact;
    @FXML
    private Button ajoutact;
    @FXML
    private Label label;
    @FXML
    private Button annuleract;
    @FXML
    private RadioButton radioajout;
    @FXML
    private ToggleGroup arwa;
    @FXML
    private RadioButton radiomodif;
    @FXML
    private RadioButton radioconsult;
    @FXML
    private Button stat;
    @FXML
    private Label actanim;
    @FXML
    private Label error;
    @FXML
    private TextField prix;
    @FXML
    private RadioButton radiosupp;
    @FXML
    private ToggleGroup arwa1;
    @FXML
    private Button suppact;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void rechercheractivite(ActionEvent event) {
    }

    @FXML
    private void getSelected(MouseEvent event) {
    }

    @FXML
    private void triactivite(ActionEvent event) {
    }

    @FXML
    private void modifieractivite(ActionEvent event) {
    }

    @FXML
    private void ajoutactivite(ActionEvent event) {
    }

    @FXML
    private void annuler(ActionEvent event) {
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
    private void statistique(ActionEvent event) {
    }

    @FXML
    private void libvalid(ActionEvent event) {
    }

    @FXML
    private void suppcheck(ActionEvent event) {
    }

    @FXML
    private void supprimeractivite(ActionEvent event) {
    }
    
}
