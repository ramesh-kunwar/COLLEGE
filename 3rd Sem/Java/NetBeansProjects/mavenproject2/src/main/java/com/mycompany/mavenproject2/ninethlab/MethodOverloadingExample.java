/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.mavenproject2.ninethlab;

/**
 *
 * @author rameshkunwar
 */
public class MethodOverloadingExample {

    public static void sum(int a, int b) {
        System.out.println("sum = " + (a + b));
    }

    public static void sum() {
        System.out.println("Sum is 0");
    }

    public static void sum(double a, double b) {
        System.out.println("Sum is " + (a+b));
    }

    public static void main(String[] args) {
        sum();
        sum(1, 2);
        sum(1.2, 4.5);

    }

}
