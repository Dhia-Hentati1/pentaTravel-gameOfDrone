/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;

import entities.Activite;
import entities.Reglement;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;

import utils.MyDB;
/**
 *
 * @author thebejaoui
 */
public class ActiviteService implements  IActivite<Activite> {
    Connection connexion;
    Statement stm;

    public ActiviteService() {
                connexion = MyDB.getInstance().getConnexion();
    }
    
    @Override
    public void ajouter(Activite t) throws SQLException  {
        String req = "INSERT INTO `activite` (`id_prop`,`libele`,`prix`, `emplacement` , `description` , `date` , `type` , `avis`) "
                + "VALUES ( ?, ?, ?, ?, ?, ?, ?, ?) ";
        PreparedStatement ps = connexion.prepareStatement(req);
        ps.setFloat(1,t.getIdu()+1);
        ps.setString(2, t.getLibele());
        ps.setFloat(3,t.getPrix());
        ps.setString(4, t.getEmplacement());
        ps.setString(5, t.getDescription());
        ps.setDate(6, t.getDate());
        ps.setString(7, t.getType());
        ps.setString(8, t.getAvis());
        
        ps.executeUpdate();
      
    }

    @Override
    public void supprimer(Activite t) throws SQLException {
        String requete = "DELETE FROM activite WHERE ida=?";
            PreparedStatement pst = connexion.prepareStatement(requete);
            pst.setInt(1, t.getIda());
             //System.out.println(t.getIda()+"/"+t.getIdu()+"/"+t.getPrix()+"/"+t.getEmplacement()+"/"+t.getDescription()+"/"+t.getDate()+"/"+t.getType()+"/"+t.getAvis());

            pst.executeUpdate();
            System.out.println("activite supprimée !");
    }

    @Override
    public void modifier(Activite t) throws SQLException  {
       
           String requete = "UPDATE activite SET id_prop=?,libele=?,prix=? , emplacement=? , description=? ,date=?,type=?,avis=? WHERE ida=?";
            PreparedStatement pst = connexion.prepareStatement(requete);
            pst.setInt(9, t.getIda());
            pst.setInt(1, t.getIdu()+1);
            pst.setString(2, t.getLibele());
            pst.setFloat(3, t.getPrix());
            pst.setString(4, t.getEmplacement());
            pst.setString(5, t.getDescription());
            pst.setDate(6, t.getDate());
            pst.setString(7, t.getType());
            pst.setString(8, t.getAvis());
            
            pst.executeUpdate();
            System.out.println("activite modifiée !");
    }

    @Override
    public List<Activite> afficher() throws SQLException {
      List<Activite> activite = new ArrayList<>();
        String req = "select * from activite";
        stm = connexion.createStatement();
        //ensemble de resultat
        ResultSet rst = stm.executeQuery(req);
            
        while (rst.next()) {
            
            Activite a = new Activite(rst.getInt("id_prop"),
                    rst.getString("libele"),
                    rst.getInt("prix"),
                    rst.getString("emplacement"),
                    rst.getString("description"),
                    rst.getDate("date"),
                    rst.getString("type"),
                    rst.getString("avis"));
            rst.getInt("ida");
            activite.add(a);
        }
        return activite;
    }
    
    //SELECT * FROM activite order by date desc  
        public ObservableList<Activite> getActiviteList()throws SQLException{
         
                   ObservableList<Activite> activite = FXCollections.observableArrayList();

       
            String requete = "SELECT * FROM activite";
            PreparedStatement pst = connexion.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();
           while (rs.next()) {
                activite.add(new Activite(rs.getInt(1), rs.getInt("id_prop"), rs.getString("libele"),rs.getInt("prix"),rs.getString("emplacement"),rs.getString("description"),rs.getDate("date"),rs.getString("type"),rs.getString("avis")));
            }

        
        for(Activite A : activite)
            System.out.println(A.getIda()+"/"+A.getIdu()+"/"+A.getLibele()+"/"+A.getPrix()+"/"+A.getEmplacement()+"/"+A.getDescription()+"/"+A.getDate()+"/"+A.getType()+"/"+A.getAvis()+"/");


        return activite; 
        } 
     @Override
    public ObservableList<Activite> triedate() throws SQLException {
        
       ObservableList<Activite> activite = FXCollections.observableArrayList();

       
            String requete = " SELECT * FROM activite order by date desc ";
            PreparedStatement pst = connexion.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();
           while (rs.next()) {
                activite.add(new Activite(rs.getInt(1), rs.getInt("id_prop"), rs.getString("libele"),rs.getInt("prix"),rs.getString("emplacement"),rs.getString("description"),rs.getDate("date"),rs.getString("type"),rs.getString("avis")));
            }

        
        for(Activite A : activite)
            System.out.println(A.getIda()+"/"+A.getIdu()+"/"+A.getLibele()+"/"+A.getPrix()+"/"+A.getEmplacement()+"/"+A.getDescription()+"/"+A.getDate()+"/"+A.getType()+"/"+A.getAvis()+"/");


        return activite; 
    }
    

    @Override
    public List<Activite> rechrcherlib(String libele) throws SQLException {
        List<Activite> activite = new ArrayList<>();
        String requete = "SELECT * FROM activite WHERE libele = '"+libele+"'  ";
            PreparedStatement pst = connexion.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                activite.add(new Activite(rs.getInt(1), rs.getInt("id_prop"), rs.getString("libele"),rs.getInt("prix"),rs.getString("emplacement"),rs.getString("description"),rs.getDate("date"),rs.getString("type"),rs.getString("avis")));
            }
             
            System.out.println("activite trouver !"+activite.get(0).getLibele());
            return activite;
        
    }

    @Override
    public List<Activite> rechrcheridavis(int idavis) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void aff(Activite t) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void rechnom(String nom) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<Reglement> etatdecaissejou(String dateoperation) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void etatecheancier(String echeancier) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
 

   

   

   
    
    
    
    
    
    
    
    
}
