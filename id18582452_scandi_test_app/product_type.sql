create table id18582452_scandi_test_app.product_type
(
    id         int auto_increment
        primary key,
    type       varchar(16) not null,
    attributes varchar(16) null,
    unit       varchar(16) null,
    constraint product_type_id_uindex
        unique (id),
    constraint product_type_type_uindex
        unique (type)
);

