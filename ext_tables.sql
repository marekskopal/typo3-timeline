CREATE TABLE tx_mstimeline_domain_model_event (
    name varchar(255) NOT NULL DEFAULT '',
    perex text NOT NULL DEFAULT '',
    description mediumtext,
    date_from int(11) NOT NULL DEFAULT 0,
    date_to int(11) DEFAULT NULL
);
