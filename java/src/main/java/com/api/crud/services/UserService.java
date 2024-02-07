package com.api.crud.services;

import java.util.ArrayList;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.api.crud.models.UserModel;
import com.api.crud.repositories.IUserRepository;

// Service es para decir que es un servicio por lo tanto indica que es una clase que contiene logica del programa

@Service
public class UserService {

    // Autowired es para decirle que inyecte las dependencias necesarias en este
    // caso el repositorio IUserRepository
    @Autowired
    IUserRepository userRepository;

    /**
     * Creamos un metodo que busque todos los usuarios basado en el repositorio y
     * JpaRepository
     * 
     * @return
     */
    public ArrayList<UserModel> getUsers() {
        return (ArrayList<UserModel>) userRepository.findAll();
    }

    /**
     * aqui creamos un metodo que guarde un usuario en la base de datos pidiendo un
     * UserModel y tulizando la funcion save de JpaRepository
     * 
     * @param user
     * @return
     */
    public UserModel saveUser(UserModel user) {
        return userRepository.save(user);
    }

    public Optional<UserModel> getById(Long id) {
        return userRepository.findById(id);
    }

    /**
     * Creamos un metodo que actualice un usuario en la base de datos pidiendo un
     * UserModel y utizando la funcion save de JpaRepository
     * 
     * @param user
     * @return
     */
    public UserModel updateById(UserModel request, Long id) {
        UserModel user = userRepository.findById(id).get();

        user.setFirstName(request.getFirstName());
        user.setLastName(request.getLastName());
        user.setEmail(request.getEmail());

        return userRepository.save(user);
    }

    public Boolean deleteById(Long id) {
        try {
            userRepository.deleteById(id);
            return true;
        } catch (Exception e) {
            return false;
        }
    }
}