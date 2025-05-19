# Используем официальный образ MySQL 8.0 как базовый
FROM mysql:8.0

# Установка переменных окружения
ENV MYSQL_ROOT_PASSWORD=12345!Asd
ENV MYSQL_DATABASE=wordpress_db
ENV MYSQL_USER=admin
ENV MYSQL_PASSWORD=admin

# Копируем конфигурационные файлы
COPY my.cnf /etc/mysql/conf.d/
COPY init.sql /docker-entrypoint-initdb.d/

# Открываем порт MySQL
EXPOSE 3306

# Используем стандартную команду запуска из родительского образа
CMD ["mysqld"]