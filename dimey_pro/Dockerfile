  nginx:
    image: nginx:1.10
    container_name: book-nginx
    links:
      - php-fpm
      - php-cli
    volumes:
      - ./:/var/www
      - ./docker/nginx/default.conf:/etc/nginx/conf.d/default.conf
    ports:
      - "80:80"
    depends_on:
      - php-fpm
      - php-cli
