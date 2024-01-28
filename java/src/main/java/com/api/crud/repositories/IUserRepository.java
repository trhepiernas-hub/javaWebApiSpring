package com.api.crud.repositories;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.api.crud.models.UserModel;

// los repositorios son interfaces que permiten hacer querys a la base de datos

// Ademas le decimos que extienda de JpaRepository y le pasamos el modelo y el tipo de dato del id pora hacer consultas mas sencillas
@Repository
public interface IUserRepository extends JpaRepository<UserModel, Long> {
}