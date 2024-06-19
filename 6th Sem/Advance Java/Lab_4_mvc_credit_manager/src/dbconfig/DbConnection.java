/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package dbconfig;

import java.sql.Connection;
import java.sql.Statement;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.ResultSet;

/**
 *
 * @author rameshkunwar
 */
public class DbConnection {

    private final static String DB_NAME = "lab_4_mvc_credit_manager";
    private final static String DB_USER = "root";
    private final static String DB_PASSWORD = "rootuser";
    private final static String DB_URL = "jdbc:mysql://localhost:3306/" + DB_NAME;

    static Connection CON;
    static Statement STMT;

    public static DbConnection getConnection() {
        DbConnection dbconnect = new DbConnection();
        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            CON = DriverManager.getConnection(DB_URL, DB_USER, DB_PASSWORD);

        } catch (SQLException | ClassNotFoundException ex) {
            System.out.println("Error " + ex.getMessage());

        }
        return dbconnect;
    }

    /**
     * this method is a select query builder which create SQL Statement for
     * Select query
     *
     * @params sql
     * @return
     */
    public ResultSet selectQueryBuilder(String sql) {
      
        ResultSet rs = null;

        try {
            STMT = CON.createStatement();
            rs = STMT.executeQuery(sql);

        } catch (Exception ex) {
            System.out.println("Error: " + ex.getMessage());
        }
        return rs;
    }
    
    /**
     *  this method is a query build for insert, update and delete query
     * here iud stands for i = insert, u = update, d = delete
     * @param sql
     * @return status
     */
    
    public boolean iudQueryBuilder(String sql){
        boolean status = false;
        try {
            STMT = CON.createStatement();
            if(STMT.executeUpdate(sql) > 0){
                status = true;
            }
        } catch (SQLException e) {
            System.out.println("Error . " + e.getMessage());
            
        }
        return status;
    }

}
