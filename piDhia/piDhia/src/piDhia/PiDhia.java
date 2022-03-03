package piDhia;
import entities.Commande;
import entities.Etablissement;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
//import service.EtablissementService;
import service.commandeService;

public class PiDhia {

    public static void main(String[] args) {
       // Etablissement a=new Etablissement(3, 500, "restaurant", "hafood", "ariana", "luxe", "satisfait");
        //Etablissement aa=new Etablissement(2, 6000, "bar", "billionaire", "gammart", "luxe", "satisfait");
     
     Commande c=new Commande(2 ,4, 10F,"good");
     //Reglement re =new Reglement(2, "24/02/2022", 10000, "espece");
     
        
      //  EtablissementService as = new EtablissementService();
        commandeService av=new commandeService();
        //reglementservice rs=new reglementservice();
        
      
        
    /* try {
           as.ajouter(aa);
          //  as.ajouter(aa);
            System.out.println("ajout avec succes");
       } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
       
         try {
            System.out.println(as.afficher());
             System.out.println("afficher avec succes");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
         
       /*try {
            as.supprimer(new Etablissement(7));
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
       
          /*try {
            as.modifier(new Etablissement(6,6, 8, "xfood", "chapati", "ghazela", "moyen", "pas satisfait"));
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
          
          /* try {
            System.out.println(as.trienumero());
             System.out.println("trie avec succes");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
           
          /*  try {
           as.rechrcherlib("ariana");
             
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
                            //    COMMANDE ///
                            
                            
                             /*try {
           av.ajouter(c);
            System.out.println("ajout avec succes");
       } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
       */
      /* try {
            av.supprimer(new Avis(2));
            
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
      
         try {
            av.modifier(new Commande(1, 0, 6F, "xdfghj"));
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
      /*  try {
            System.out.println(av.afficher());
             System.out.println("afficher avec succes");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
        
       /* try {
            System.out.println(av.triedate());
             System.out.println("trie avec succes");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
       /* try {
           av.rechrcheridavis(5);
             
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
        
      /*  try {
            System.out.println(as.afficher());
             System.out.println("afficher avec succes");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
         
      
      
      //reglement//
      
      
      
       /*try {
           rs.ajouter(r);
           rs.ajouter(re);
         
            System.out.println("ajout avec succes");
       } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
      */
      
     /* try {
            rs.supprimer(new Reglement(3));
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
      
     /* try {
            rs.modifier(new Reglement(1, 2, "11/04/1997", 100000, "cheque"));
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
      
       /*try {
            System.out.println(rs.afficher());
             System.out.println("afficher avec succes");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
     
       /* try {
            rs.aff(r);
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
     /* try {
            System.out.println(rs.triedate());
             System.out.println("trie par date d operation avec succes");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
     
       /*try {
            rs.rechnom("dhia");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
            System.out.println("nom inexistant");
        }
  */
        // TODO code application logic here
    }
    
}
