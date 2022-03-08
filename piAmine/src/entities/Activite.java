/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entities;


import java.sql.Date;
import java.time.LocalDate;
/**
 *
 * @author thebejaoui
 */
public class Activite {
     private int ida;
    private int id_prop;
        private String libele;
   private float prix;
   private String emplacement;
   private String description;
   private Date  date;
   private String  type;
   private String avis;

    public Activite( int id_prop, String libele, float prix, String emplacement, String description, Date date, String type, String avis) {
        
        this.id_prop = id_prop;
        this.libele = libele;
        
        this.prix = prix;
        this.emplacement = emplacement;
        this.description = description;
        this.date = date;
        this.type = type;
        this.avis = avis;
    }

    public Activite(int ida) {
        this.ida = ida;
    }

    public Activite(int ida, int id_prop, String libele,float prix, String emplacement, String description, Date date, String type, String avis) {
        this.ida = ida;
        this.id_prop = id_prop;
        this.libele = libele;
        this.prix = prix;
        this.emplacement = emplacement;
        this.description = description;
        this.date = date;
        this.type = type;
        this.avis = avis;
    }

  

   
   

    public int getIda() {
        return ida;
    }

    public void setIda(int ida) {
        this.ida = ida;
    }

    public int getIdu() {
        return id_prop;
    }

    public void setIdu(int id_prop) {
        this.id_prop = id_prop;
    }

    public float getPrix() {
        return prix;
    }

    public void setPrix(float prix) {
        this.prix = prix;
    }

    public String getEmplacement() {
        return emplacement;
    }

    public void setEmplacement(String emplacement) {
        this.emplacement = emplacement;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
        this.date = date;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public String getAvis() {
        return avis;
    }

    public void setAvis(String avis) {
        this.avis = avis;
    }

    public String getLibele() {
        return libele;
    }

    public void setLibele(String libele) {
        this.libele = libele;
    }

    
    @Override
    public String toString() {
        return "Activite{" + "ida=" + ida + ", idu=" + id_prop + ", prix=" + prix + ", emplacement=" + emplacement + ", description=" + description + ", date=" + date + ", type=" + type + ", avis=" + avis + '}';
    }

  

    
   
   
   
    
    
}
