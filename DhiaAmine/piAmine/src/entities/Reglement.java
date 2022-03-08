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
public class Reglement {
     private int idreglement;
    private int id_prop;
        private Date dateoperation;
       
   private float montant;
   private String modedepaiement;
   private Date echeancier;

    public Reglement(int idreglement, int id_prop, Date dateoperation, float montant, String modedepaiement,Date echeancier) {
        this.idreglement = idreglement;
        this.id_prop = id_prop;
        this.dateoperation = dateoperation;
        this.montant = montant;
        this.modedepaiement = modedepaiement;
        this.echeancier = echeancier;
    }

    public Reglement(int id_prop, Date dateoperation, float montant, String modedepaiement,Date echeancier) {
        this.id_prop = id_prop;
        this.dateoperation = dateoperation;
        this.montant = montant;
        this.modedepaiement = modedepaiement;
        this.echeancier = echeancier;

        
    }
    

    public Reglement( Date dateoperation, float montant, String modedepaiement,Date echeancier) {
       
        this.dateoperation = dateoperation;
        this.montant = montant;
        this.modedepaiement = modedepaiement;
        this.echeancier = echeancier;
    }

    public Date getEcheancier() {
        return echeancier;
    }

    public void setEcheancier(Date echeancier) {
        this.echeancier = echeancier;
    }

    public Reglement(int idreglement) {
        this.idreglement = idreglement;
    }

    public int getIdreglement() {
        return idreglement;
    }

    public void setIdreglement(int idreglement) {
        this.idreglement = idreglement;
    }

    public int getIdu() {
        return id_prop;
    }

    public void setIdu(int id_prop) {
        this.id_prop = id_prop;
    }

    public Date getDateoperation() {
        return dateoperation;
    }

    public void setDateoperation(Date dateoperation) {
        this.dateoperation = dateoperation;
    }

    public float getMontant() {
        return montant;
    }

    public void setMontant(float montant) {
        this.montant = montant;
    }

    public String getModedepaiement() {
        return modedepaiement;
    }

    public void setModedepaiement(String modedepaiement) {
        this.modedepaiement = modedepaiement;
    }

    @Override
    public String toString() {
        return "Reglement{" + "idreglement=" + idreglement + ", id_prop=" + id_prop + ", dateoperation=" + dateoperation + ", montant=" + montant + ", modedepaiement=" + modedepaiement + ", echeancier=" + echeancier + '}';
    }

   
   
    
    
}
