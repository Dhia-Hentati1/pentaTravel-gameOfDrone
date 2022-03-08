/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;

import entities.Avis;
import entities.Reglement;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

import utils.MyDB;
/**
 *
 * @author thebejaoui
 */
public class AvisService implements  IActivite<Avis> {
    Connection connexion;
    Statement stm;
    
    public AvisService() {
                connexion = MyDB.getInstance().getConnexion();
    }
    
    
    
    

    @Override
    public void ajouter(Avis t) throws SQLException {
        String req = "INSERT INTO `avis` (`idu`,`contenu`,`date`) "
                + "VALUES ( ?, ?, ?) ";
        PreparedStatement ps = connexion.prepareStatement(req);
        ps.setInt(1,t.getIdu());
        ps.setString(2,t.getContenu());
        ps.setString(3, t.getDate());
       
        
        ps.executeUpdate();
        
        
        
    }

    @Override
    public void supprimer(Avis t) throws SQLException {
        String requete = "DELETE FROM `avis` WHERE idavis=?";
            PreparedStatement pst = connexion.prepareStatement(requete);
            pst.setInt(1, t.getIdavis());
             //System.out.println(t.getIda()+"/"+t.getIdu()+"/"+t.getPrix()+"/"+t.getEmplacement()+"/"+t.getDescription()+"/"+t.getDate()+"/"+t.getType()+"/"+t.getAvis());

            pst.executeUpdate();
            System.out.println("avis supprimée !");
    }

    @Override
    public void modifier(Avis t) throws SQLException {
        String requete = "UPDATE avis SET idu=?,contenu=?,date=? WHERE idavis=?";
            PreparedStatement pst = connexion.prepareStatement(requete);
            pst.setInt(4, t.getIdavis());
          
            pst.setInt(1, t.getIdu());
            
            pst.setString(2, t.getContenu());
            pst.setString(3, t.getDate());
            
          
            
            pst.executeUpdate();
            System.out.println("activite modifiée !");
    }

    @Override
    public List<Avis> afficher() throws SQLException {
        List<Avis> avis = new ArrayList<>();
        String req = "select * from avis";
        stm = connexion.createStatement();
        //ensemble de resultat
        ResultSet rst = stm.executeQuery(req);
            
        while (rst.next()) {
            
            Avis a = new Avis(rst.getInt("idavis"),
                    rst.getInt("idu"),
                    
                    rst.getString("contenu"),
                    rst.getString("date")
                    );
            
            avis.add(a);
        }
        return avis;
    }

    @Override
    public List<Avis> triedate() throws SQLException {
       List<Avis> avis = new ArrayList<>();

       
            String requete = "SELECT * FROM avis order by date desc  ";
            PreparedStatement pst = connexion.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                Avis a = new Avis(rs.getInt("idavis"),
                    rs.getInt("idu"),
                    
                    rs.getString("contenu"),
                    rs.getString("date"));
            
            avis.add(a);
            }
        return avis;      
    }

    @Override
    public List<Avis> rechrcherlib(String libele) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<Avis> rechrcheridavis(int idavis) throws SQLException {
          List<Avis> avis = new ArrayList<>();
        String requete = "SELECT * FROM avis WHERE idavis  = '"+idavis +"'  ";
            PreparedStatement pst = connexion.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                avis.add(new Avis(rs.getInt(1), rs.getInt("idu"), rs.getString("contenu"),rs.getString("date")));
            }
             
            System.out.println("avis trouver !"+avis.get(0).getIdavis());
            return avis;
    }

    @Override
    public void aff(Avis t) throws SQLException {
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
