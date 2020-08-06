create table if not exists posts
(
    id            int auto_increment
        primary key,
    date_creation datetime     not null,
    title         varchar(50)  not null,
    chapo         varchar(255) not null,
    content       text         null,
    image         varchar(50)  null
);

create table if not exists settings
(
    id    int auto_increment
        primary key,
    name  varchar(255) not null,
    value varchar(255) not null,
    constraint settings_name_uindex
        unique (name)
);

create table if not exists users
(
    id       int auto_increment
        primary key,
    login    varchar(50)  not null,
    password varchar(255) not null,
    role     int          null,
    constraint users_login_uindex
        unique (login)
);


