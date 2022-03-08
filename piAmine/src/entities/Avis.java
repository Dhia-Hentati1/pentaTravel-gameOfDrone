/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entities;

/**
 *
 * @author thebejaoui
 */
public class Avis {
   private int idavis ;
   private int idu;
   private String contenu;
   private String date;

    public Avis(int idavis, int idu, String contenu, String date) {
        this.idavis = idavis;
        this.idu = idu;
        this.contenu = contenu;
        this.date = date;
    }

    public Avis(int id) {
        this.idavis = idavis;
    }

    public Avis( String contenu, String date) {
        
        this.contenu = contenu;
        this.date = date;
    }

    public int getIdavis() {
        return idavis;
    }

    public void setIdavis(int idavis) {
        this.idavis = idavis;
    }

    

    public int getIdu() {
        return idu;
    }

    public void setIdu(int idu) {
        this.idu = idu;
    }

    public String getContenu() {
        return contenu;
    }

    public void setContenu(String contenu) {
        this.contenu = contenu;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

    
    @Override
    public String toString() {
        return "Avis{" + "idavis=" + idavis + ", idu=" + idu + ", contenu=" + contenu + ", date=" + date + '}';
    }
   
   
   
    
}
