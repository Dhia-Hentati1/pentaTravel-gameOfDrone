package service;

import entities.Commande;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import service.IA;

import utils.MyDB;
public class commandeService implements IA<Commande>
{
    


    Connection connexion;
    Statement stm;

    public commandeService() {
        connexion = MyDB.getInstance().getConnexion();
    }

    

    @Override
    public void ajouter(Commande t) throws SQLException {
        String req = "INSERT INTO `commande` (`id_prop`,`ide`,`prix`, `description`) "
                + "VALUES ( ?, ?, ?, ?) ";
        PreparedStatement ps = connexion.prepareStatement(req);
        ps.setInt(1, t.getId_prop());
        ps.setInt(2, t.getIde());
        ps.setFloat(3, t.getPrix());
        ps.setString(4, t.getDescription());

        ps.executeUpdate();
    }

    @Override
    public void supprimer(Commande t) throws SQLException {
        String requete = "DELETE FROM commande WHERE id =?";
        PreparedStatement pst = connexion.prepareStatement(requete);
        pst.setInt(1, t.getId());

        pst.executeUpdate();
        System.out.println("commande supprimée !");
    }

    @Override
    public void modifier(Commande t) throws SQLException {
        String requete = "UPDATE commande SET id_prop=?,ide=?,prix=? , description=? WHERE id=?";
        PreparedStatement pst = connexion.prepareStatement(requete);

        pst.setInt(1, t.getId_prop());
        pst.setInt(2, t.getIde());
        pst.setFloat(3, t.getPrix());
        pst.setString(4, t.getDescription());
        pst.setInt(5, t.getId());

        pst.executeUpdate();
        System.out.println("commande modifiée !");
    }

    @Override
    public List<Commande> afficher() throws SQLException {
        List<Commande> commande = new ArrayList<>();
        String req = "SELECT * FROM commande left join utilisateur on commande.idu=utilisateur.idu";
        stm = connexion.createStatement();
        //ensemble de resultat
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {

            Commande a = new Commande(rst.getInt("id"),
                    rst.getInt("id_prop"),
                    rst.getInt("ide"),
                    rst.getFloat("prix"),
                    rst.getString("description")
            );

            commande.add(a);
        }
        return commande;

    }

    @Override
    public List<Commande> trienumero() throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<Commande> rechrcherlib(String libele) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<Commande> rechrcheridavis(int idavis) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void aff(Commande t) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void rechnom(String nom) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
}
   // @Override
 /*   public List<Commande> trienumero() throws SQLException {
        List<Commande> commande = new ArrayList<>();

        String requete = "SELECT * FROM commande order by numero asc   ";
        PreparedStatement pst = connexion.prepareStatement(requete);
        ResultSet rs = pst.executeQuery();
        while (rs.next()) {
            Commande a = new Commande(rs.getInt("id"),
                    rs.getInt("idu"),
                    rs.getInt("ide"),
                    rs.getFloat("prix"),
                    rs.getString("description")
            );
            commande.add(a);
        }
        return commande;
    }
}

   /* @Override
    public List<Commande> rechrcherlib(String nom) throws SQLException {
        return null;

    }

    @Override
    public List<Commande> rechrcheridavis(int idavis) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
*/
    
    /*
    @Override
    public void aff(Commande t) throws SQLException {
        stm = connexion.createStatement();
        ResultSet rst;
        rst = stm.executeQuery("SELECT * FROM commande left join utilisateur on commande.idu=utilisateur.idu");
        while (rst.next()) {
            // System.out.println("Id reglement:"+rst.getInt("idreglement"));
            // System.out.println("Id utilisateur:"+rst.getInt("idu"));
            System.out.println("Nom utilisateur:" + rst.getString("nom"));
            System.out.println("Prenom utilisateur:" + rst.getString("prenom"));
            System.out.println("date de loperation :" + rst.getString("dateoperation"));
            System.out.println("Montant:" + rst.getFloat("montant"));
            System.out.println("Mode de paiement:" + rst.getString("modedepaiement"));
            System.out.println("-------------------------------------------");

        }

    }

    @Override
    public void rechnom(String nom) throws SQLException {
        stm = connexion.createStatement();
        ResultSet rst;
        rst = stm.executeQuery("SELECT * FROM reglement left join utilisateur on reglement.idu=utilisateur.idu where nom  = '" + nom + "'  ");
        while (rst.next()) {
            System.out.println("Id reglement:" + rst.getInt("idreglement"));
            System.out.println("Id utilisateur:" + rst.getInt("idu"));
            System.out.println("Nom utilisateur:" + rst.getString("nom"));
            System.out.println("Prenom utilisateur:" + rst.getString("prenom"));
            System.out.println("date de loperation :" + rst.getString("dateoperation"));
            System.out.println("Montant:" + rst.getFloat("montant"));
            System.out.println("Mode de paiement:" + rst.getString("modedepaiement"));
            System.out.println("-------------------------------------------");

        }

    }
*/
