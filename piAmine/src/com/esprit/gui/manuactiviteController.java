package com.esprit.gui;
import entities.Activite;
import java.net.URL;
import java.sql.SQLException;
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
import javafx.fxml.Initializable;
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

public class manuactiviteController implements Initializable{

    @FXML
    private TextField rechact;

    @FXML
    private TableView<Activite> tab_act;

    @FXML
    private TableColumn<Activite, String> col_lib;

    @FXML
    private TableColumn<Activite,Float> col_prix;

    @FXML
    private TableColumn<Activite,String> col_emp;

    @FXML
    private TableColumn<Activite, String> col_desc;

    @FXML
    private TableColumn<Activite,String> col_date;

    @FXML
    private TableColumn<Activite, String> col_type;

    @FXML
    private TableColumn<Activite, String> col_avis;
    
     @FXML
    private TableColumn<Activite,Integer> col_id;

    @FXML
    private TableColumn<Activite,Integer>  col_idprop;


    @FXML
    private Button modifact;

    @FXML
    private Button ajoutact;

    @FXML
    private Label label;

    @FXML
    private TextField idprop;

    @FXML
    private TextField lib;

    @FXML
    private TextField emp;

    @FXML
    private TextField desc;

    @FXML
    private TextField date;

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
    private TextField type;

    @FXML
    private TextField avis;

    @FXML
    private TextField id;

    @FXML
    private RadioButton radiosupp;

    @FXML
    private ToggleGroup arwa1;

    @FXML
    private Button suppact;

    @FXML
    private Button triactivite;

 



    @FXML
    void ajoutactivite(javafx.event.ActionEvent mouseEvent) throws SQLException{
        if (mouseEvent.getSource() == ajoutact) {
      
           
            ActiviteService as = new ActiviteService();
            as.ajouter(new Activite(Integer.parseInt(idprop.getText()),lib.getText(),Integer.parseInt(prix.getText()),emp.getText(),desc.getText(),date .getText(),type.getText(),avis.getText()));
            JOptionPane.showMessageDialog(null, "Activite Ajoutée");
             

           id.setDisable(false);
           col_id.setCellValueFactory(new PropertyValueFactory<>("ida"));
           col_idprop.setCellValueFactory(new PropertyValueFactory<>("id_prop"));
           col_lib.setCellValueFactory(new PropertyValueFactory<>("libele"));
            col_prix.setCellValueFactory(new PropertyValueFactory<>("prix"));
            col_emp.setCellValueFactory(new PropertyValueFactory<>("emplacement"));
            col_desc.setCellValueFactory(new PropertyValueFactory<>("description"));
            col_date.setCellValueFactory(new PropertyValueFactory<>("date"));
            col_type.setCellValueFactory(new PropertyValueFactory<>("type"));
            col_avis.setCellValueFactory(new PropertyValueFactory<>("avis"));
            ObservableList<Activite> list = as.getActiviteList();
            tab_act.setItems(list);
            id.setText(null);
            idprop.setText(null);
            lib.setText(null);
            prix.setText(null);
            emp.setText(null);
            desc.setText(null);
            date.setText(null);
            type.setText(null);
            avis.setText(null);
            
        }
        
        
        

    }

    @FXML
    void ajoutcheck(ActionEvent event) {
        label.setText("Ajout ");
        label.setLayoutX(120);
        id.setEditable(false);
        idprop.setEditable(true);
        lib.setEditable(true);
        prix.setEditable(true);
        emp.setEditable(true);
        desc.setEditable(true);
        type.setEditable(true);
        date.setEditable(true);
        avis.setEditable(true);
        ajoutact.setDisable(false);
        modifact.setDisable(true);
        suppact.setDisable(true);
        annuleract.setDisable(false);
        radiosupp.setSelected(false);
       
        radioconsult.setSelected(false);
        radiomodif.setSelected(false);
         id.setText(null);
        idprop.setText(null);
            lib.setText(null);
            prix.setText(null);
            emp.setText(null);
            desc.setText(null);
            date.setText(null);
            type.setText(null);
            avis.setText(null);
      

    }

    @FXML
    void annuler(ActionEvent event) {
        id.setText(null);
        idprop.setText(null);
            lib.setText(null);
            prix.setText(null);
            emp.setText(null);
            desc.setText(null);
            date.setText(null);
            type.setText(null);
            avis.setText(null);

    }

    @FXML
    void consultcheck(javafx.event.ActionEvent mouseEvent) throws SQLException {
        label.setText("Consultation ");
        label.setLayoutX(120);
        id.setEditable(false);
        idprop.setEditable(false);
        lib.setEditable(false);
        prix.setEditable(false);
        emp.setEditable(false);
        desc.setEditable(false);
        type.setEditable(false);
        avis.setEditable(false);
        ajoutact.setDisable(true);
        modifact.setDisable(true);
        suppact.setDisable(true);
        annuleract.setDisable(true);
        radiosupp.setSelected(false);
        radioajout.setSelected(false);
        radiomodif.setSelected(false);
         id.setText(null);
        idprop.setText(null);
            lib.setText(null);
            prix.setText(null);
            emp.setText(null);
            desc.setText(null);
            date.setText(null);
            type.setText(null);
            avis.setText(null);
            if (mouseEvent.getSource() == triactivite) {
            ActiviteService sa = new ActiviteService();
col_id.setCellValueFactory(new PropertyValueFactory<>("ida"));
           col_idprop.setCellValueFactory(new PropertyValueFactory<>("id_prop"));
            col_lib.setCellValueFactory(new PropertyValueFactory<>("libele"));
            col_prix.setCellValueFactory(new PropertyValueFactory<>("prix"));
            col_emp.setCellValueFactory(new PropertyValueFactory<>("emplacement"));
            col_desc.setCellValueFactory(new PropertyValueFactory<>("description"));
            col_date.setCellValueFactory(new PropertyValueFactory<>("date"));
            col_type.setCellValueFactory(new PropertyValueFactory<>("type"));
            col_avis.setCellValueFactory(new PropertyValueFactory<>("avis"));
            ObservableList<Activite> list = sa.triedate();
            tab_act.setItems(list);
            id.setText(null);
            idprop.setText(null);
            lib.setText(null);
            prix.setText(null);
            emp.setText(null);
            desc.setText(null);
            date.setText(null);
            type.setText(null);

    }}

    @FXML
    void getSelected(MouseEvent event) {
        if ((radioajout.isSelected())) {
            label.setText("Consulter ");
        label.setLayoutX(120);
        id.setEditable(false);
        idprop.setEditable(false);
        lib.setEditable(false);
        prix.setEditable(false);
        emp.setEditable(false);
        desc.setEditable(false);
        type.setEditable(false);
        avis.setEditable(false);
        ajoutact.setDisable(true);
        modifact.setDisable(true);
        suppact.setDisable(true);
        annuleract.setDisable(true);
        radiosupp.setSelected(false);
        radioajout.setSelected(false);
        radiomodif.setSelected(false);
         id.setText(null);
        idprop.setText(null);
            lib.setText(null);
            prix.setText(null);
            emp.setText(null);
            desc.setText(null);
            date.setText(null);
            type.setText(null);
           

            int index = tab_act.getSelectionModel().getSelectedIndex();
            if (index <= -1) {

                return;
            }
           id.setText(col_id.getCellData(index).toString());
           //idprop.setText(col_idprop.getCellData(index).toString());
            lib.setText(col_lib.getCellData(index).toString());
            prix.setText(col_prix.getCellData(index).toString());
            emp.setText(col_emp.getCellData(index).toString());
            desc.setText(col_desc.getCellData(index).toString());
            date.setText(col_date.getCellData(index).toString());
             type.setText(col_type.getCellData(index).toString());
              avis.setText(col_avis.getCellData(index).toString());
            
           
        } else if ((radiomodif.isSelected())) {
              label.setText("Modifier ");
        label.setLayoutX(100);
            int index = tab_act.getSelectionModel().getSelectedIndex();
            if (index <= -1) {

                return;
            }
            id.setEditable(false);
            idprop.setEditable(true);
            lib.setEditable(true);
            prix.setEditable(true);
            emp.setEditable(true);
            desc.setEditable(true);
            date.setEditable(true);
            type.setEditable(true);
            avis.setEditable(true);
   id.setText(col_id.getCellData(index).toString());
           //idprop.setText(col_idprop.getCellData(index).toString());
           lib.setText(col_lib.getCellData(index).toString());
            prix.setText(col_prix.getCellData(index).toString());
            emp.setText(col_emp.getCellData(index).toString());
            desc.setText(col_desc.getCellData(index).toString());
            date.setText(col_date.getCellData(index).toString());
             type.setText(col_type.getCellData(index).toString());
              avis.setText(col_avis.getCellData(index).toString());

        } else if ((radioconsult.isSelected())) {
             label.setText("Consultation ");
        label.setLayoutX(100);
            int index = tab_act.getSelectionModel().getSelectedIndex();
            if (index <= -1) {

                return;
            }
            id.setEditable(false);
            idprop.setEditable(false);
            lib.setEditable(false);
            prix.setEditable(false);
            emp.setEditable(false);
            desc.setEditable(false);
            date.setEditable(false);
            type.setEditable(false);
            avis.setEditable(false);

   id.setText(col_id.getCellData(index).toString());
           //idprop.setText(col_idprop.getCellData(index).toString());
            lib.setText(col_lib.getCellData(index).toString());
            prix.setText(col_prix.getCellData(index).toString());
            emp.setText(col_emp.getCellData(index).toString());
            desc.setText(col_desc.getCellData(index).toString());
            date.setText(col_date.getCellData(index).toString());
             type.setText(col_type.getCellData(index).toString());
              avis.setText(col_avis.getCellData(index).toString());


          

        }
 else  {
             label.setText("Supprimer ");
        label.setLayoutX(100);
            int index = tab_act.getSelectionModel().getSelectedIndex();
            if (index <= -1) {

                return;
            }
            id.setEditable(false);
            idprop.setEditable(false);
            lib.setEditable(false);
            prix.setEditable(false);
            emp.setEditable(false);
            desc.setEditable(false);
            date.setEditable(false);
            type.setEditable(false);
            avis.setEditable(false);

   id.setText(col_id.getCellData(index).toString());
           //idprop.setText(col_idprop.getCellData(index).toString());
            lib.setText(col_lib.getCellData(index).toString());
            prix.setText(col_prix.getCellData(index).toString());
            emp.setText(col_emp.getCellData(index).toString());
            desc.setText(col_desc.getCellData(index).toString());
            date.setText(col_date.getCellData(index).toString());
             type.setText(col_type.getCellData(index).toString());
              avis.setText(col_avis.getCellData(index).toString());


          

        }
    }

    @FXML
    void imgvalid(ActionEvent event) {

    }

    @FXML
    void libvalid(ActionEvent event) {

    }

    @FXML
    void modifcheck(ActionEvent event) {
         label.setText("Modifier ");
        label.setLayoutX(120);
        id.setEditable(true);
        idprop.setEditable(true);
        lib.setEditable(true);
        prix.setEditable(true);
        emp.setEditable(true);
        desc.setEditable(true);
        type.setEditable(true);
        avis.setEditable(true);
        ajoutact.setDisable(true);
        modifact.setDisable(false);
        suppact.setDisable(true);
        radiosupp.setSelected(false);
       
        radioconsult.setSelected(false);
        radioajout.setSelected(false);
        annuleract.setDisable(false);
         id.setText(null);
        idprop.setText(null);
            lib.setText(null);
            prix.setText(null);
            emp.setText(null);
            desc.setText(null);
            date.setText(null);
            type.setText(null);
            avis.setText(null);

    }

    @FXML
    void modifieractivite(javafx.event.ActionEvent mouseEvent)throws SQLException {
        if (mouseEvent.getSource() == modifact) {

            ActiviteService as = new ActiviteService();
            as.modifier(new Activite(Integer.parseInt(id.getText()),Integer.parseInt(idprop.getText()),lib.getText(),Float.parseFloat(prix.getText()),emp.getText(),desc.getText(),date .getText(),type.getText(),avis.getText()));
            JOptionPane.showMessageDialog(null, "activite Modifiée");
            
            col_id.setCellValueFactory(new PropertyValueFactory<>("ida"));
           col_idprop.setCellValueFactory(new PropertyValueFactory<>("id_prop"));
            col_lib.setCellValueFactory(new PropertyValueFactory<>("libele"));
            col_prix.setCellValueFactory(new PropertyValueFactory<>("prix"));
            col_emp.setCellValueFactory(new PropertyValueFactory<>("emplacement"));
            col_desc.setCellValueFactory(new PropertyValueFactory<>("description"));
            col_date.setCellValueFactory(new PropertyValueFactory<>("date"));
            col_type.setCellValueFactory(new PropertyValueFactory<>("type"));
            col_avis.setCellValueFactory(new PropertyValueFactory<>("avis"));
            ObservableList<Activite> list = as.getActiviteList();
            tab_act.setItems(list);
            id.setText(null);
            idprop.setText(null);
            lib.setText(null);
            prix.setText(null);
            emp.setText(null);
            desc.setText(null);
            date.setText(null);
            type.setText(null);
            avis.setText(null);
            
        }

    }

    @FXML
    void prixvalid(ActionEvent event) {

    }

    @FXML
    void qtvalid(ActionEvent event) {

    }

    @FXML
    void rechercheractivite() throws SQLException {
     
        ActiviteService sa = new ActiviteService();
       col_id.setCellValueFactory(new PropertyValueFactory<>("ida"));
           col_idprop.setCellValueFactory(new PropertyValueFactory<>("id_prop"));
            col_lib.setCellValueFactory(new PropertyValueFactory<>("libele"));
            col_prix.setCellValueFactory(new PropertyValueFactory<>("prix"));
            col_emp.setCellValueFactory(new PropertyValueFactory<>("emplacement"));
            col_desc.setCellValueFactory(new PropertyValueFactory<>("description"));
            col_date.setCellValueFactory(new PropertyValueFactory<>("date"));
            col_type.setCellValueFactory(new PropertyValueFactory<>("type"));
            col_avis.setCellValueFactory(new PropertyValueFactory<>("avis"));
            ObservableList<Activite> listact = sa.getActiviteList();
            tab_act.setItems(listact);
        //ObservableList<Article> list = FXCollections.observableArrayList();

        // Wrap the ObservableList in a FilteredList (initially display all data).
        FilteredList<Activite> filteredData = new FilteredList<>(listact, b -> true);
        // 2. Set the filter Predicate whenever the filter changes.
        rechact.textProperty().addListener((observable, oldValue, newValue) -> {
            filteredData.setPredicate((Activite Activite) -> {
                // If filter text is empty, display all persons.

                if (newValue == null || newValue.isEmpty()) {
                    return true;
                }
                // Compare first name and last name of every person with filter text.
                String lowerCaseFilter = newValue.toLowerCase();

                if (Activite.getLibele().toLowerCase().indexOf(lowerCaseFilter) != -1) {
                    return true; // Filter matches libelle
                } 
                else if (String.valueOf(Activite.getPrix()).indexOf(lowerCaseFilter) != -1) {
                    return true;
                } else {
                    return false; // Does not match.
                }
            });
        });
        // 3. Wrap the FilteredList in a SortedList. 
        SortedList<Activite> sortedData = new SortedList<>(filteredData);
        // 4. Bind the SortedList comparator to the TableView comparator.
        // 	  Otherwise, sorting the TableView would have no effect.
        sortedData.comparatorProperty().bind(tab_act.comparatorProperty());

        // 5. Add sorted (and filtered) data to the table.
        tab_act.setItems(sortedData);

    }
     @FXML
    void refid(ActionEvent event) {

    }

    @FXML
    void refvalid(ActionEvent event) {

    }

    @FXML
    void statistique(ActionEvent event) {

    }
    @FXML
    void suppcheck(ActionEvent event) {
         label.setText("Supprimer ");
        label.setLayoutX(120);
        id.setEditable(true);
        idprop.setEditable(false);
        lib.setEditable(false);
        prix.setEditable(false);
        emp.setEditable(false);
        desc.setEditable(false);
        type.setEditable(false);
        avis.setEditable(false);
        ajoutact.setDisable(true);
        modifact.setDisable(true);
        suppact.setDisable(false);
        annuleract.setDisable(true);
        radioajout.setSelected(false);
       
        radioconsult.setSelected(false);
        radiomodif.setSelected(false);
         id.setText(null);
        idprop.setText(null);
            lib.setText(null);
            prix.setText(null);
            emp.setText(null);
            desc.setText(null);
            date.setText(null);
            type.setText(null);
            avis.setText(null);

        

    }


    @FXML
    void supprimeractivite(javafx.event.ActionEvent mouseEvent) throws SQLException {
        if (mouseEvent.getSource() == suppact) {

            ActiviteService as = new ActiviteService();
            as.supprimer(new Activite(Integer.parseInt(id.getText())));
            JOptionPane.showMessageDialog(null, "Activite Supprimée");
           col_id.setCellValueFactory(new PropertyValueFactory<>("ida"));
           col_idprop.setCellValueFactory(new PropertyValueFactory<>("id_prop"));
            col_lib.setCellValueFactory(new PropertyValueFactory<>("libele"));
            col_prix.setCellValueFactory(new PropertyValueFactory<>("prix"));
            col_emp.setCellValueFactory(new PropertyValueFactory<>("emplacement"));
            col_desc.setCellValueFactory(new PropertyValueFactory<>("description"));
            col_date.setCellValueFactory(new PropertyValueFactory<>("date"));
            col_type.setCellValueFactory(new PropertyValueFactory<>("type"));
            col_avis.setCellValueFactory(new PropertyValueFactory<>("avis"));
            ObservableList<Activite> list = as.getActiviteList();
            tab_act.setItems(list);
            id.setText(null);
            idprop.setText(null);
            lib.setText(null);
            prix.setText(null);
            emp.setText(null);
            desc.setText(null);
            date.setText(null);
            type.setText(null);
            avis.setText(null);

        }

    }
    
    @FXML
    void triactivite(javafx.event.ActionEvent mouseEvent) throws SQLException {
        if (mouseEvent.getSource() == triactivite) {
            ActiviteService sa = new ActiviteService();
col_id.setCellValueFactory(new PropertyValueFactory<>("ida"));
           col_idprop.setCellValueFactory(new PropertyValueFactory<>("id_prop"));
            col_lib.setCellValueFactory(new PropertyValueFactory<>("libele"));
            col_prix.setCellValueFactory(new PropertyValueFactory<>("prix"));
            col_emp.setCellValueFactory(new PropertyValueFactory<>("emplacement"));
            col_desc.setCellValueFactory(new PropertyValueFactory<>("description"));
            col_date.setCellValueFactory(new PropertyValueFactory<>("date"));
            col_type.setCellValueFactory(new PropertyValueFactory<>("type"));
            col_avis.setCellValueFactory(new PropertyValueFactory<>("avis"));
            ObservableList<Activite> list = sa.triedate();
            tab_act.setItems(list);
            id.setText(null);
            idprop.setText(null);
            lib.setText(null);
            prix.setText(null);
            emp.setText(null);
            desc.setText(null);
            date.setText(null);
            type.setText(null);
            
        }

    }

    @Override
    public void initialize(URL location, ResourceBundle resources)   {
        try {
            ActiviteService sa = new ActiviteService();
                        col_id.setCellValueFactory(new PropertyValueFactory<>("ida"));
                        col_idprop.setCellValueFactory(new PropertyValueFactory<>("id_prop"));

            col_lib.setCellValueFactory(new PropertyValueFactory<>("libele"));
            col_prix.setCellValueFactory(new PropertyValueFactory<>("prix"));
            col_emp.setCellValueFactory(new PropertyValueFactory<>("emplacement"));
            col_desc.setCellValueFactory(new PropertyValueFactory<>("description"));
            col_date.setCellValueFactory(new PropertyValueFactory<>("date"));
            col_type.setCellValueFactory(new PropertyValueFactory<>("type"));
            col_avis.setCellValueFactory(new PropertyValueFactory<>("avis"));
            ObservableList<Activite> list = sa.triedate();
            tab_act.setItems(list);
        } catch (SQLException ex) {
            Logger.getLogger(manuactiviteController.class.getName()).log(Level.SEVERE, null, ex);
        }
      
    }

 

}
