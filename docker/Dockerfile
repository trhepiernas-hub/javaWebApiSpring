FROM maven:3.8.1-openjdk-17

WORKDIR /app

COPY . .

RUN mvn clean package

CMD ["java", "-jar", "target/my-app.jar"]