FROM openjdk:17-jdk

ADD java/target/Main.jar Main.jar

EXPOSE 6969

ENV ACTIVE_PROFILE=dev

CMD ["java", "-jar", "Main.jar"]