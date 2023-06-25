# Use a imagem oficial do PHP como base
FROM php:latest

# Instale as extensões necessárias do PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copie os arquivos do seu projeto para o diretório de trabalho do Docker
COPY . /var/www/html

# Defina o diretório de trabalho
WORKDIR /var/www/html

# Exponha a porta 80 para acessar o servidor web do PHP
EXPOSE 80

# Inicie o servidor web do PHP
CMD ["php", "-S", "0.0.0.0:80"]
