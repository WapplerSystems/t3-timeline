#
# Table structure for table 'tx_cetimeline_domain_model_entry'
#
CREATE TABLE tx_cetimeline_domain_model_entry
(

    pce              int(11)             DEFAULT '0' NOT NULL,

    header           varchar(255)        DEFAULT ''  NOT NULL,
    header_layout    varchar(25)         DEFAULT ''  NOT NULL,
    description      text                DEFAULT ''  NOT NULL,
    description_html text                DEFAULT ''  NOT NULL,
    position         varchar(255)        DEFAULT ''  NOT NULL,
    typeof           varchar(255)        DEFAULT ''  NOT NULL,
    content_elements int(11) unsigned    DEFAULT '0' NOT NULL,
    media            int(11) unsigned    DEFAULT '0' NOT NULL,
    textimage_layout varchar(255)        DEFAULT ''  NOT NULL,
    image_width      varchar(255)        DEFAULT ''  NOT NULL,
    image_height     varchar(255)        DEFAULT ''  NOT NULL,
    gallery_width    varchar(255)        DEFAULT ''  NOT NULL,
    images_per_row   tinyint(4) unsigned DEFAULT '0' NOT NULL,
    enable_lightbox  tinyint(4) unsigned DEFAULT '0' NOT NULL,

    categories       int(11) unsigned    DEFAULT '0' NOT NULL

);

CREATE TABLE tt_content
(
    timeline_entries int(11) unsigned DEFAULT '0' NOT NULL,
    timeline_parent  int(11) unsigned DEFAULT '0' NOT NULL
);
