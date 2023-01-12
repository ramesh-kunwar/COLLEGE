/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.mavenproject1;

/**
 *
 * @author rameshkunwar
 */
public class Functions {

    public static int sum(int a, int b, int c) {
        return a + b + c;
    }

    public static void displaySum() {
        int result = sum(5, 10, 15);
        System.out.println("Sum = " + result);
    }
    public static void main(String[] args) {
        displaySum();
    }

}
