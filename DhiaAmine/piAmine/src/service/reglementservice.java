/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;

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
public class reglementservice implements  IActivite<Reglement> {
    
    
        Connection connexion;
    Statement stm;
public reglementservice()
{
    connexion = MyDB.getInstance().getConnexion();
}

    @Override
    public void ajouter(Reglement t) throws SQLException {
         String req = "INSERT INTO `reglement` (`id_prop`,`dateoperation`,`montant`, `modedepaiement`,`echeancier`) "
                + "VALUES ( ?, ?, ?, ?, ?) ";
        PreparedStatement ps = connexion.prepareStatement(req);
        ps.setInt(1,t.getIdu());
        ps.setDate(2, t.getDateoperation());
        ps.setFloat(3,t.getMontant());
        ps.setString(4, t.getModedepaiement());
         ps.setDate(5, t.getEcheancier());
     
        
        ps.executeUpdate();
    }

    @Override
    public void supprimer(Reglement t) throws SQLException {
        String requete = "DELETE FROM reglement WHERE idreglement =?";
            PreparedStatement pst = connexion.prepareStatement(requete);
            pst.setInt(1, t.getIdreglement());
             //System.out.println(t.getIda()+"/"+t.getIdu()+"/"+t.getPrix()+"/"+t.getEmplacement()+"/"+t.getDescription()+"/"+t.getDate()+"/"+t.getType()+"/"+t.getAvis());

            pst.executeUpdate();
            System.out.println("reglement supprimée !");
    }

    @Override
    public void modifier(Reglement t) throws SQLException {
        String requete = "UPDATE reglement SET id_prop=?,dateoperation=?,montant=? , modedepaiement=? ,echeancier=? WHERE idreglement=?";
            PreparedStatement pst = connexion.prepareStatement(requete);
            
            pst.setInt(1, t.getIdu());
            pst.setDate(2, t.getDateoperation());
            pst.setFloat(3, t.getMontant());
            pst.setString(4, t.getModedepaiement());
            pst.setDate(5, t.getEcheancier());
            pst.setInt(6, t.getIdreglement());
           
            
            pst.executeUpdate();
            System.out.println("reglement modifiée !");
    }

   @Override
    public List<Reglement> afficher() throws SQLException {
       List<Reglement> reglement = new ArrayList<>();
        String req = "SELECT * FROM reglement left join utilisateur on reglement.id_prop=utilisateur.id_prop";
        stm = connexion.createStatement();
        //ensemble de resultat
        ResultSet rst = stm.executeQuery(req);
            
        while (rst.next()) {
            
            Reglement a = new Reglement(rst.getInt("idreglement"),
                    rst.getInt("id_prop"),
                    
                    rst.getDate("dateoperation"),
                    rst.getFloat("montant"),
                    rst.getString("modedepaiement"),
                    rst.getDate("echeancier")
                    
                    );
            
            reglement.add(a);
        }
        return reglement;
         
    }

    @Override
    public List<Reglement> triedate() throws SQLException {
        List<Reglement> reglement = new ArrayList<>();

       
            String requete = "SELECT * FROM reglement order by dateoperation asc   ";
            PreparedStatement pst = connexion.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                Reglement a = new Reglement(rs.getInt("idreglement"),
                   rs.getInt("id_prop"),
                    
                    rs.getDate("dateoperation"),
                    rs.getFloat("montant"),
                    rs.getString("modedepaiement"),
                        rs.getDate("echeancier")
                    );
            reglement.add(a);
            }
        return reglement;      
    }

    @Override
    public List<Reglement> rechrcherlib(String nom) throws SQLException {
            return null;
        
    }

    @Override
    public List<Reglement> rechrcheridavis(int idavis) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void aff(Reglement t) throws SQLException {
        stm = connexion.createStatement();
        ResultSet rst;
        rst=stm.executeQuery("SELECT * FROM reglement left join utilisateur on reglement.id_prop=utilisateur.id_prop");
        while(rst.next())
        {
           // System.out.println("Id reglement:"+rst.getInt("idreglement"));
           // System.out.println("Id utilisateur:"+rst.getInt("idu"));
            System.out.println("Nom utilisateur:"+rst.getString("nom"));
            System.out.println("Prenom utilisateur:"+rst.getString("prenom"));
            System.out.println("date de loperation :"+rst.getDate("dateoperation"));
            System.out.println("Montant:"+rst.getFloat("montant"));
            System.out.println("Mode de paiement:"+rst.getString("modedepaiement"));
            System.out.println("les cheques echeancier :"+rst.getDate("echeancier"));
            System.out.println("-------------------------------------------");
            
        
        
        }
        
        
    }

    @Override
    public void rechnom(String nom) throws SQLException {
        stm = connexion.createStatement();
        ResultSet rst;
        rst=stm.executeQuery("SELECT * FROM reglement left join utilisateur on reglement.id_prop=utilisateur.id_prop where nom  = '"+nom +"'  ");
        while(rst.next())
        {
           System.out.println("Id reglement:"+rst.getInt("idreglement"));
           System.out.println("Id utilisateur:"+rst.getInt("id_prop"));
            System.out.println("Nom utilisateur:"+rst.getString("nom"));
            System.out.println("Prenom utilisateur:"+rst.getString("prenom"));
            System.out.println("date de loperation :"+rst.getDate("dateoperation"));
            System.out.println("Montant:"+rst.getFloat("montant"));
            System.out.println("Mode de paiement:"+rst.getString("modedepaiement"));
            System.out.println("les cheques echeancier :"+rst.getDate("echeancier"));
            System.out.println("-------------------------------------------");
     }
    }

    @Override
    public List<Reglement>  etatdecaissejou(String dateoperation) throws SQLException {
        List<Reglement> reglement = new ArrayList<>();
       stm = connexion.createStatement();
        ResultSet rst;
        rst=stm.executeQuery("SELECT SUM(montant)\"somme de montant\",dateoperation,modedepaiement,echeancier FROM reglement WHERE dateoperation='"+dateoperation +"'GROUP BY modedepaiement");


        
           while(rst.next())
        {
           Reglement a = new Reglement(
                    rst.getDate("dateoperation"),
                    rst.getFloat("somme de montant"),
                    rst.getString("modedepaiement"),
                   rst.getDate("echeancier")
                    );
            reglement.add(a);
     }
           
            return reglement; 
         
            }

    @Override
     public void etatecheancier(String echeancier) throws SQLException {
        
       stm = connexion.createStatement();
        ResultSet rst;
        rst=stm.executeQuery("SELECT nom,prenom,dateoperation,montant,modedepaiement,echeancier FROM reglement left join utilisateur on reglement.id_prop=utilisateur.id_prop WHERE echeancier='"+echeancier +"' and modedepaiement='c'");


        
           while(rst.next())
        {
            
            System.out.println("Nom utilisateur:"+rst.getString("nom"));
            System.out.println("Prenom utilisateur:"+rst.getString("prenom"));
            System.out.println("date de loperation :"+rst.getDate("dateoperation"));
            System.out.println("Montant:"+rst.getFloat("montant"));
            System.out.println("Mode de paiement:"+rst.getString("modedepaiement"));
            System.out.println("le cheque echeancier :"+rst.getDate("echeancier"));
            System.out.println("-------------------------------------------");
            
     } 
    }
        
    
     public ObservableList<Reglement> getActiviteList()throws SQLException {
         
                   ObservableList<Reglement> reglement = FXCollections.observableArrayList();

       
            String requete = "SELECT * FROM reglement";
            PreparedStatement pst = connexion.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();
           while (rs.next()) {
                reglement.add(new Reglement(rs.getInt(1), rs.getInt("id_prop"), rs.getDate("dateoperation"),rs.getFloat("montant"),rs.getString("modedepaiement"),rs.getDate("echeancier")));
            }

        
        for(Reglement A : reglement)
            System.out.println(A.getIdreglement()+"/"+A.getIdu()+"/"+A.getDateoperation()+"/"+A.getMontant()+"/"+A.getModedepaiement()+"/"+A.getEcheancier()+"/");


        return reglement; 
        } 
    
    
    }
    
  
    
    
    
    
    

