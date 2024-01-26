package com.api.crud.controllers;

import java.util.ArrayList;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.api.crud.models.UserModel;
import com.api.crud.services.UserService;

// RestController es para decir que es un controlador y por lo tanto devuelve objetos de dominio y RequestMapping es para decirle la ruta del controlador
@RestController
@RequestMapping("/user")
public class UserController {

    @Autowired
    private UserService userService;
    // GetMapping es para decirle que es un metodo get y la ruta del metodo por
    // ejemplo si getmapping es /@GetMapping("/getusers") entonces la ruta del
    // metodo es /user/getusers

    /**
     * En esta funcion utilizamos la funcion creada en el servicio para obtener
     * todos los usuarios cuan el usuario haga una request a /user
     * 
     * @return
     */
    @GetMapping
    public ArrayList<UserModel> getUsers() {
        return this.userService.getUsers();
    }

    /**
     * En esta funcion utilizamos la funcion creada en el servicio para guardar un
     * usuario y el usuario lo recibiremos mediante el body del request tipo post
     * 
     * @return
     */
    @PostMapping
    public UserModel saveUser(@RequestBody UserModel user) {
        return this.userService.saveUser(user);

    }

    /**
     * En esta funcion utilizamos la funcion creada en el servicio para obtener un
     * usuario por id y el id lo recibiremos mediante la url del request tipo get
     * 
     * @return
     */
    @GetMapping(path = "/{id}")
    public Optional<UserModel> getById(@PathVariable("id") Long id) {
        return this.userService.getById(id);
    }

    @PutMapping(path = "/{id}")
    public UserModel updateUserById(@RequestBody UserModel request, @PathVariable("id") Long id) {
        return this.userService.updateById(request, id);
    }

    @DeleteMapping(path = "/{id}")
    public String deleteById(@PathVariable("id") Long id) {
        boolean ok = this.userService.deleteById(id);

        if (ok) {
            return "User with id " + id + " was deleted";
        } else {
            return "Error, User with id " + id + " was not deleted";
        }
    }

}