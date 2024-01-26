package com.api.crud.models;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;

// Entity es para decir que cada campo de la clase es una columna de la base de datos y Table es para decirle el nombre de la tabla
@Entity
@Table(name = "user")
/**
 * UserControler
 */
public class UserModel {

    // Id es para decir que es el id de la tabla y GeneratedValue es para decir que
    // es autoincrementable
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private long id;

    // @Column(name = "first_name") si el nombre de la columna es diferente al
    // nombre de la variable
    private String firstName;

    private String lastName;

    private String email;

    public long getId() {
        return id;
    }

    public void setId(long id) {
        this.id = id;
    }

    public String getFirstName() {
        return firstName;
    }

    public void setFirstName(String firstName) {
        this.firstName = firstName;
    }

    public String getLastName() {
        return lastName;
    }

    public void setLastName(String lastName) {
        this.lastName = lastName;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

}