package service;

import entities.Etablissement;
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
 * @author 21629
 */
public class EtablissementService implements IA<Etablissement> {

    Connection connexion;
    Statement stm;

    public EtablissementService() {
        connexion = MyDB.getInstance().getConnexion();
    }
@Override
    public void ajouter(Etablissement t) throws SQLException {
        String req = "INSERT INTO `etablissement` (`id_prop`,`numero`,`type`, `nom` , `adresse` , `description` , `avis`) "
                + "VALUES ( ?, ?, ?, ?, ?, ?, ?) ";
        PreparedStatement ps = connexion.prepareStatement(req);
        ps.setInt(1, t.getId_prop());
        ps.setInt(2, t.getNumero());
        ps.setString(3, t.getType());
        ps.setString(4, t.getNom());
        ps.setString(5, t.getAdresse());
        ps.setString(6, t.getDescription());
        ps.setString(7, t.getAvis());

        ps.executeUpdate();

    }

    @Override
    public void supprimer(Etablissement t) throws SQLException {
        String requete = "DELETE FROM etablissement WHERE ide=?";
        PreparedStatement pst = connexion.prepareStatement(requete);
        pst.setInt(1, t.getIde());

        pst.executeUpdate();
        System.out.println("etablissement supprimé !");
    }

    @Override
    public void modifier(Etablissement t) throws SQLException {

        String requete = "UPDATE etablissement SET id_prop=?,numero=?,type=? , nom=? , adresse=? ,description=?,avis=? WHERE ide=?";
        PreparedStatement pst = connexion.prepareStatement(requete);
        pst.setInt(8, t.getIde());
        pst.setInt(1, t.getId_prop());
        pst.setInt(2, t.getNumero());
        pst.setString(3, t.getType());
        pst.setString(4, t.getNom());
        pst.setString(5, t.getAdresse());
        pst.setString(6, t.getDescription());
        pst.setString(7, t.getAvis());
       

        pst.executeUpdate();
        System.out.println("etablissement modifié !");
    }

    @Override
    public List<Etablissement> afficher() throws SQLException {
        List<Etablissement> etablissement = new ArrayList<>();
        String req = "select * from etablissement";
        stm = connexion.createStatement();
        //ensemble de resultat
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {

            Etablissement a = new Etablissement(rst.getInt("ide"),
                    
                    rst.getInt("numero"),
                    rst.getString("type"),
                    rst.getString("nom"),
                    rst.getString("adresse"),
                    rst.getString("description"),
                    rst.getString("avis"));
            rst.getInt("id_prop");
            etablissement.add(a);
        }
        return etablissement;
    }

    @Override
    public List<Etablissement> trienumero() throws SQLException {

        List<Etablissement> etablissement = new ArrayList<>();

        String requete = "SELECT * FROM etablissement order by numero desc  ";
        PreparedStatement pst = connexion.prepareStatement(requete);
        ResultSet rs = pst.executeQuery();
        while (rs.next()) {
            Etablissement a = new Etablissement(rs.getInt("id_prop"),
                    
                    rs.getInt("numero"),
                    rs.getString("type"),
                    rs.getString("nom"),
                    rs.getString("adresse"),
                    rs.getString("description"),
                    rs.getString("avis"));
            rs.getInt("ide");
            etablissement.add(a);
        }
        return etablissement;
    }

    @Override
    public List<Etablissement> rechrcherlib(String adresse) throws SQLException {
        List<Etablissement> etablissement = new ArrayList<>();
        
        String requete = "SELECT * FROM etablissement WHERE adresse = '" + adresse + "'  ";
        PreparedStatement pst = connexion.prepareStatement(requete);
        ResultSet rs = pst.executeQuery();
        while (rs.next()) {
            etablissement.add(new Etablissement(rs.getInt(1), rs.getInt("id_prop"),  rs.getInt("numero"), rs.getString("type"),rs.getString("nom"),rs.getString("adresse"), rs.getString("description"), rs.getString("avis")));
        }

        System.out.println("etablissement trouvé !" + etablissement.get(0).getAdresse());
        return etablissement;

    }

    @Override
    public List<Etablissement> rechrcheridavis(int idavis) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void aff(Etablissement t) throws SQLException {
       throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void rechnom(String nom) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

}
