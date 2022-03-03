package utils;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class MyDB {
    final String url ="jdbc:mysql://localhost:3306/pi";
    final String login ="root";
    final String pwd="";
    private static MyDB instance;
    Connection connexion;
     private MyDB(){
        
        try {
            connexion =  DriverManager.getConnection(url, login, pwd);
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }
     
     public static MyDB getInstance(){
    if (instance == null)
        instance = new MyDB();
    return instance;
    }

    public Connection getConnexion() {
        return connexion;
    }
    
}

/*
import java.sql.Connection;
import java.sql.DriverManager;

public class DatabaseConnection {
    private Connection con;
    private static DatabaseConnection dbc;
    private DatabaseConnection(){
         try { 
             Class.forName("com.mysql.jdbc.Driver");
             System.out.println("Driver Loaded");
             con = DriverManager.getConnection("jdbc:mysql://localhost:3306/pidev","root","");
             System.out.println("connection established");
         } catch (Exception ex) {
             System.out.println(ex);
         }
    }
    public static DatabaseConnection getDatabaseConnection()
    {
        if(dbc==null)
        {dbc =   new DatabaseConnection();}
        return dbc;
        
    }
public static void main(String[] args){
        new DatabaseConnection();
}

public Connection getConnection()
{ return con;
}
}    */