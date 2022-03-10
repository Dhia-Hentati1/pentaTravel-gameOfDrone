package service;

import java.sql.SQLException;
import java.util.List;

public interface IA<T> {

    public void ajouter(T t) throws SQLException;
    public void supprimer(T t) throws SQLException;
    public void modifier(T t) throws SQLException;
    public List<T> afficher() throws SQLException;
    public List<T> trienumero() throws SQLException;
    public List<T> rechrcherlib(String libele) throws SQLException;
    public List<T> rechrcheridavis(int idavis) throws SQLException;
    public void aff(T t) throws SQLException;
    public void rechnom(String nom) throws SQLException;

}
/*public interface IA {

    public void ajouter(T t) throws SQLException;

    public void supprimer(T t) throws SQLException;

    public void modifier(T t) throws SQLException;

    public List<T> afficher() throws SQLException;

    public List<T> trienumero() throws SQLException;

   /* public List<T> rechrcherlib(String libele) throws SQLException;

    public List<T> rechrcheridavis(int idavis) throws SQLException;

    public void aff(T t) throws SQLException;

    public void rechnom(String nom) throws SQLException;*/

 /*public static class T {

        public T() {
        }
    }
}*/
