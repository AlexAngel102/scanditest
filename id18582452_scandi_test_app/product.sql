create table id18582452_scandi_test_app.product
(
    id         int auto_increment
        primary key,
    sku        varchar(16) not null,
    name       varchar(32) not null,
    attributes varchar(16) not null,
    type       int         not null,
    constraint table_name_id_uindex
        unique (id),
    constraint product_product_type_id_fk
        foreign key (type) references id18582452_scandi_test_app.product_type (id)
);

