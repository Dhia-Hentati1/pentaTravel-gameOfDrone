/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;

import entities.Activite;
import entities.Reglement;
import entities.Utilisateur;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import service.IActivite;

import utils.MyDB;

/**
 *
 * @author thebejaoui
 */
public class UtilisateurService implements IActivite<Utilisateur> {

    Connection connexionn;
    Statement stm;

    public UtilisateurService() {
        connexionn = MyDB.getInstance().getConnexion();
    }

    @Override
    public void ajouter(Utilisateur t) throws SQLException {

        String req = "INSERT INTO `utilisateur` (`nom`,`prenom`,`datedenaissance`,`role`,`login`,`mdp`) "
                + "VALUES ( ?, ?, ?, ?, ?, ?) ";

        PreparedStatement ps = connexionn.prepareStatement(req);
        ps.setString(1, t.getNom());
        ps.setString(2, t.getPrenom());
        ps.setString(3, t.getDatedenaissance());
        ps.setString(4, t.getRole());
        ps.setString(5, t.getLogin());
        ps.setString(6, t.getMdp());

        ps.executeUpdate();
    }

    @Override
    public void supprimer(Utilisateur t) throws SQLException {
        String requete = "DELETE FROM utilisateur WHERE id_prop =?";
        PreparedStatement pst = connexionn.prepareStatement(requete);
        pst.setInt(1, t.getIdu());
        //System.out.println(t.getIda()+"/"+t.getIdu()+"/"+t.getPrix()+"/"+t.getEmplacement()+"/"+t.getDescription()+"/"+t.getDate()+"/"+t.getType()+"/"+t.getAvis());

        pst.executeUpdate();
        System.out.println("utilisateur supprimée !");
    }

    @Override
    public void modifier(Utilisateur t) throws SQLException {
        String requete = "UPDATE utilisateur SET nom=?,prenom=?,datedenaissance=? , role=? , login=? ,mdp=? WHERE id_prop =?";
        PreparedStatement pst = connexionn.prepareStatement(requete);
        pst.setInt(7, t.getIdu());

        pst.setString(1, t.getNom());
        pst.setString(2, t.getPrenom());
        pst.setString(3, t.getDatedenaissance());
        pst.setString(4, t.getRole());
        pst.setString(5, t.getLogin());
        pst.setString(6, t.getMdp());
        ;

        pst.executeUpdate();
        System.out.println("utilisateur modifiée !");
    }

    @Override
    public List<Utilisateur> afficher() throws SQLException {
        List<Utilisateur> utilisateur = new ArrayList<>();
        String req = "select * from utilisateur";
        stm = connexionn.createStatement();
        //ensemble de resultat
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
            Utilisateur p = new Utilisateur(rst.getInt("id_prop"),//or rst.getInt(1)
                    rst.getString("nom"),
                    rst.getString("prenom"),
                    rst.getString("datedenaissance"),
                    rst.getString("role"),
                    rst.getString("login"),
                    rst.getString("mdp"));

            utilisateur.add(p);
        }
        return utilisateur;
    }

    @Override
    public List<Utilisateur> triedate() throws SQLException {
         List<Utilisateur> utilisateur = new ArrayList<>();

       
            String requete = "SELECT * FROM utilisateur order by datedenaissance desc  ";
            PreparedStatement pst = connexionn.prepareStatement(requete);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                Utilisateur a = new Utilisateur(rs.getInt("id_prop "),
                    rs.getString("nom"),
                    rs.getString("prenom"),
                    rs.getString("datedenaissance"),
                    rs.getString("role"),
                    rs.getString("login"),
                    rs.getString("mdp"));
            
            utilisateur.add(a);
            }
        return utilisateur;      
    }

    public List<Utilisateur> rechrcherid(int idu) throws SQLException {
        List<Utilisateur> utilisateur = new ArrayList<>();

        String requete = "SELECT * FROM utilisateur WHERE id_prop  = '" + idu + "'  ";
        PreparedStatement pst = connexionn.prepareStatement(requete);
        ResultSet rs = pst.executeQuery();
        while (rs.next()) {
            utilisateur.add(new Utilisateur(rs.getInt(1),rs.getString("nom"), rs.getString("prenom"), rs.getString("datedenaissance"), rs.getString("role"), rs.getString("login"), rs.getString("mdp")));

        }

        System.out.println("utilisateur trouver !" + utilisateur.get(0).getIdu());

        return utilisateur;
    }

    @Override
    public List<Utilisateur> rechrcherlib(String libele) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<Utilisateur> rechrcheridavis(int idavis) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void aff(Utilisateur t) throws SQLException {
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
