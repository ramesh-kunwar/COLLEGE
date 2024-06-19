/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package model;

/**
 *
 * @author rameshkunwar
 */
public class AdminModel {

    private int admin_id;
    private String admin_username;
    private String admin_password;
    private String created_at;
    private String updated_at;

    /**
     * @return admin_id
     */
    public int getAdminId() {
        return this.admin_id;
    }

    /**
     * @params param_admin_id
     */
    public void setAdminId(int param_admin_id) {
        this.admin_id = param_admin_id;
    }

    public String getAdminUsername() {
        return this.admin_username;
    }

    public void setAdminUsername(String param_username) {
        this.admin_username = param_username;
    }

    public String getAdminPassword() {
        return this.admin_password;
    }

    public void setAdminPassword(String param_password) {
        this.admin_username = param_password;
    }

    public String getCreatedAt() {
        return this.created_at;
    }

    public String getUpdatedAt() {
        return this.updated_at;
    }

    public void setUpdatedAt(String params_date) {
        this.updated_at = params_date;
    }
}
