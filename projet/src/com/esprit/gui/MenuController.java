package com.esprit.gui;

import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.stage.Stage;

public class MenuController {
  @FXML
    private Button activite;

    @FXML
    private Button reglement;

    @FXML
    private Button etablissement;

    @FXML
    private Button commande;

    @FXML
    private Button vol;

    @FXML
    private Button agence;

    @FXML
    private Button transport;

    @FXML
    private Button resrvation;

    @FXML
    private Button hotel;

    @FXML
    private Button location;
      

    @FXML
    void activite(javafx.event.ActionEvent mouseEvent) {
        if (mouseEvent.getSource() == activite) {
            try {
                Parent root = FXMLLoader.load(getClass().getResource("manuactivite.fxml"));
                Stage stage = new Stage();
                stage.setScene(new Scene(root));
                stage.setTitle("GameOfDrone");
                stage.show();

            

} catch (IOException ex) {
                Logger.getLogger(manuactiviteController.class
.getName()).log(Level.SEVERE, null, ex);
            }
        }

    }
       @FXML
    void agence(javafx.event.ActionEvent mouseEvent) {
        if (mouseEvent.getSource() == agence) {
            try {
                Parent root = FXMLLoader.load(getClass().getResource("AgenceCRUD.fxml"));
                Stage stage = new Stage();
                stage.setScene(new Scene(root));
                stage.setTitle("GameOfDrone");
                stage.show();

            

} catch (IOException ex) {
                Logger.getLogger(AgenceCRUDController.class
.getName()).log(Level.SEVERE, null, ex);
            }
        }

    }
      @FXML
    void commande(javafx.event.ActionEvent mouseEvent) {
         if (mouseEvent.getSource() == commande) {
            try {
                Parent root = FXMLLoader.load(getClass().getResource("commande.fxml"));
                Stage stage = new Stage();
                stage.setScene(new Scene(root));
                stage.setTitle("GameOfDrone");
                stage.show();

            

} catch (IOException ex) {
                Logger.getLogger(manuactiviteController.class
.getName()).log(Level.SEVERE, null, ex);
            }
        }

    }
       @FXML
    void etablissement(javafx.event.ActionEvent mouseEvent) {
         if (mouseEvent.getSource() == etablissement) {
            try {
                Parent root = FXMLLoader.load(getClass().getResource("etablissement.fxml"));
                Stage stage = new Stage();
                stage.setScene(new Scene(root));
                stage.setTitle("GameOfDrone");
                stage.show();

            

} catch (IOException ex) {
                Logger.getLogger(EtablissementController.class
.getName()).log(Level.SEVERE, null, ex);
            }
        }


    }
         @FXML
    void hotel(javafx.event.ActionEvent mouseEvent) {
         if (mouseEvent.getSource() == hotel) {
            try {
                Parent root = FXMLLoader.load(getClass().getResource("HotelCRUD.fxml"));
                Stage stage = new Stage();
                stage.setScene(new Scene(root));
                stage.setTitle("GameOfDrone");
                stage.show();

            

} catch (IOException ex) {
                Logger.getLogger(HotelCRUDController.class
.getName()).log(Level.SEVERE, null, ex);
            }
        }



    }

    @FXML
    void location(javafx.event.ActionEvent mouseEvent) {
 if (mouseEvent.getSource() == location) {
            try {
                Parent root = FXMLLoader.load(getClass().getResource("LocationCRUD.fxml"));
                Stage stage = new Stage();
                stage.setScene(new Scene(root));
                stage.setTitle("GameOfDrone");
                stage.show();

            

} catch (IOException ex) {
                Logger.getLogger(LocationCRUDController.class
.getName()).log(Level.SEVERE, null, ex);
            }
        }


    }

    @FXML
    void reglement(javafx.event.ActionEvent mouseEvent) {
         if (mouseEvent.getSource() == reglement) {
            try {
                Parent root = FXMLLoader.load(getClass().getResource("menureglement.fxml"));
                Stage stage = new Stage();
                stage.setScene(new Scene(root));
                stage.setTitle("GameOfDrone");
                stage.show();

            

} catch (IOException ex) {
                Logger.getLogger(manuactiviteController.class
.getName()).log(Level.SEVERE, null, ex);
            }
        }


    }
        @FXML
    void resrvation(javafx.event.ActionEvent mouseEvent) {
        if (mouseEvent.getSource() == resrvation) {
            try {
                Parent root = FXMLLoader.load(getClass().getResource("ReservationCRUD.fxml"));
                Stage stage = new Stage();
                stage.setScene(new Scene(root));
                stage.setTitle("GameOfDrone");
                stage.show();

            

} catch (IOException ex) {
                Logger.getLogger(ReservationCRUDController.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }
    
  

 
 
    
      @FXML
    void transport(javafx.event.ActionEvent mouseEvent) {
        if (mouseEvent.getSource() == transport) {
            try {
                Parent root = FXMLLoader.load(getClass().getResource("TransportCRUD.fxml"));
                Stage stage = new Stage();
                stage.setScene(new Scene(root));
                stage.setTitle("GameOfDrone");
                stage.show();

            

} catch (IOException ex) {
                Logger.getLogger(TransportCRUDController.class
.getName()).log(Level.SEVERE, null, ex);
            }
        }

    }

    
     @FXML
    void vol(javafx.event.ActionEvent mouseEvent) {
         if (mouseEvent.getSource() == vol) {
            try {
                Parent root = FXMLLoader.load(getClass().getResource("VolCRUD.fxml"));
                Stage stage = new Stage();
                stage.setScene(new Scene(root));
                stage.setTitle("GameOfDrone");
                stage.show();

            

} catch (IOException ex) {
                Logger.getLogger(VolCRUDController.class
.getName()).log(Level.SEVERE, null, ex);
            }
        }


    }
    



  
}
