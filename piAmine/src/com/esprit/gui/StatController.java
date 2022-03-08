/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.gui;

import utils.MyDB;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ResourceBundle;
import javafx.animation.Animation;
import javafx.animation.FadeTransition;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.chart.BarChart;
import javafx.scene.chart.XYChart;
import javafx.scene.control.Label;
import javafx.util.Duration;

/**
 * FXML Controller class
 *
 * @author ArwaBj
 */
public class StatController implements Initializable {

    @FXML
    private BarChart<String, Integer> stat;
     @FXML
    private Label label;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        FadeTransition fadeTransition = new FadeTransition(Duration.seconds(1), label);
        fadeTransition.setFromValue(1.0);
        fadeTransition.setToValue(0.0);
         fadeTransition.setCycleCount(Animation.INDEFINITE);
        fadeTransition.play();
               Connection cnx = MyDB.getInstance().getConnexion();

       XYChart.Series<String ,Integer> series1 =new XYChart.Series<>();
       String requete = "SELECT * FROM activite group by libele order by id_prop";
       try{
            PreparedStatement pst = cnx.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
               
                    series1.getData().add(new XYChart.Data<>(rs.getString("libele"),rs.getInt("id_prop")));
             
            }
            stat.getData().add(series1);
           // series1.setName("Crampons");
       } catch(Exception e) {
           
    }
       /* XYChart.Series<String ,Integer> series2 =new XYChart.Series<>();
       String requete2 = "SELECT * FROM article WHERE (qt_article < 5 AND categorie like 'veste' ) ";
       try{
            PreparedStatement pst = cnx.prepareStatement(requete2);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
               
                    series2.getData().add(new XYChart.Data<>(rs.getString("libelle"),rs.getInt("qt_article")));
             
            }
            stat.getData().add(series2);
            series2.setName("Veste");
       } catch(Exception e) {
           
    }
       XYChart.Series<String ,Integer> series3 =new XYChart.Series<>();
       String requete3 = "SELECT * FROM article WHERE (qt_article < 5 AND categorie like 'accessoir' ) ";
       try{
            PreparedStatement pst = cnx.prepareStatement(requete3);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
               
                    series3.getData().add(new XYChart.Data<>(rs.getString("libelle"),rs.getInt("qt_article")));
             
            }
            stat.getData().add(series3);
            series3.setName("Accessoir");
       } catch(Exception e) {
           
    } 
           XYChart.Series<String ,Integer> series4 =new XYChart.Series<>();
       String requete4 = "SELECT * FROM article WHERE (qt_article < 5 AND categorie like 'proteine') ";
       try{
            PreparedStatement pst = cnx.prepareStatement(requete4);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
               
                    series3.getData().add(new XYChart.Data<>(rs.getString("libelle"),rs.getInt("qt_article")));
             
            }
            stat.getData().add(series4);
            series4.setName("Proteine");
       } catch(Exception e) {
           
    } 
       
    } */   
    
    }}

