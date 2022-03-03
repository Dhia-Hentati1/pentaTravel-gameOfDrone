/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package piamine;
import entities.Reglement;
import entities.Activite;
import entities.Avis;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import service.ActiviteService;
import service.AvisService;
import service.reglementservice;

/**
 *
 * @author thebejaoui
 */
public class PiAmine {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Activite a=new Activite(3, "cloud", 500, "rades", "prog", "18/06/2000", "luxe", "satisfait");
        Activite aa=new Activite(2, "chanel", 6000, "france", "vetement", "26/01/2002", "luxe", "satisfait");
     Avis avv=new Avis("tres bien application"," 18/06/1977");
     Reglement r=new Reglement(1, "27/02/2022", 6530, "v","28/02/2022");
     Reglement re =new Reglement(2, "27/02/2022", 4500, "v","28/02/2022");
     
        
        ActiviteService as = new ActiviteService();
        AvisService av=new AvisService();
        reglementservice rs=new reglementservice();
        
      
        
    /*  try {
           as.ajouter(a);
          //  as.ajouter(aa);
            System.out.println("ajout avec succes");
       } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
       
       /*  try {
            System.out.println(as.afficher());
             System.out.println("afficher avec succes");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
         
       try {
            as.supprimer(new Activite(26));
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
       
          try {
            as.modifier(new Activite(29, 100, "alcantara", 7000, "hammalif", "luxe", "18/06/1997", "vet", "satisfait"));
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
          
           try {
            System.out.println(as.triedate());
             System.out.println("trie avec succes");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
           
            try {
           as.rechrcherlib("sas");
             
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
                            //    AVIS ///
                            
                            
                            /* try {
           av.ajouter(avv);
            System.out.println("ajout avec succes");
       } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
       
      /* try {
            av.supprimer(new Avis(2));
            
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
      
        /* try {
            av.modifier(new Avis(1, 0, "xdcfghjk", "xdfghj"));
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
        
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
      
      
      
    /*   try {
           rs.ajouter(r);
           rs.ajouter(re);
         
            System.out.println("ajout avec succes");
       } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
      
      
    /* try {
            rs.supprimer(new Reglement(22));
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
      
     /*try {
            rs.modifier(new Reglement(20, 1, "11/04/1997", 40000, "v","28/02/2022"));
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
      
      /* try {
            System.out.println(rs.afficher());
             System.out.println("afficher avec succes");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
     
      /*try {
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
     
     /*  try {
            rs.rechnom("djebi");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
            System.out.println("nom inexistant");
        }*/
 /* try {
            System.out.println(rs.etatdecaissejou("27/02/2022"));
             
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
/* try {
           rs.etatecheancier("28/02/2022");
             
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
   /* try {
            System.out.println(as.getActiviteList());
             System.out.println("trie par date d operation avec succes");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
  */
    
   /* try {
            System.out.println(as.triedate());
             System.out.println("trie avec succes");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
           */
   
   
   try {
            as.modifier(new Activite(45, 100, "alcantara", 7000, "hammalif", "luxe", "18/06/1997", "vet", "satisfait"));
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
  
        // TODO code application logic here
    }
    
}
