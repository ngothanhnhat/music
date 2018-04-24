-- we don't know how to generate schema webmusic (class Schema) :(
create table baihat
(
  id int(250) auto_increment
    primary key,
  TenBaiHat text collate utf8_unicode_ci not null,
  CaSiId int(250) null,
  NhacSiId int(250) null,
  TheLoaiId int(250) null,
  DuongDan text not null,
  Loi text collate utf8_unicode_ci not null,
  LuotNghe int not null,
  Album text collate utf8_unicode_ci not null,
  PlaylistId int not null,
  audio text null,
  lyrics text null
)
  engine=InnoDB charset=utf8
;

create table baihat_playlist
(
  IdBaiHat int not null,
  IdPlaylist int not null
)
  engine=InnoDB
;

create table casi
(
  id int(250) auto_increment
    primary key,
  TenCaSi text not null,
  NgaySinh date not null,
  QueQuan text not null,
  img text not null,
  TieuSu text not null
)
  engine=InnoDB charset=utf8
;

create table casi_baihat
(
  id int(250) not null
    primary key,
  CaSiId varchar(11) not null,
  BaiHatId varchar(11) not null
)
  engine=InnoDB charset=utf8
;

create table chude
(
  id int(250) auto_increment
    primary key,
  TenChuDe text not null
)
  engine=InnoDB charset=utf8
;

create table nhacsi
(
  id int auto_increment
    primary key,
  TenNhacSi text not null
)
  engine=InnoDB charset=utf8mb4
;

create table playlist
(
  id int(250) auto_increment
    primary key,
  TenPlayList text not null,
  LuotNghe text not null,
  Hinh text not null,
  NguoiTao int not null,
  TheLoai int not null
)
  engine=InnoDB charset=utf8
;

create table theloai
(
  id int(250) auto_increment
    primary key,
  TenTheLoai text not null
)
  engine=InnoDB charset=utf8
;

create table user
(
  id int(250) auto_increment
    primary key,
  UserName text not null,
  PassWord text not null,
  Email text not null,
  YeuThich int not null,
  PhanQuyen int not null
)
  engine=InnoDB charset=utf8
;

create table user_baihat
(
  idBH int not null,
  idND int not null,
  playlist text not null
)
  engine=InnoDB charset=utf8mb4
;

create table video
(
  id int(250) not null
    primary key,
  TenVideo text not null,
  idCS int not null,
  TheLoai text not null,
  LuotXem int not null
)
  engine=InnoDB charset=utf8
;

create table wishlist
(
  UserId int not null,
  RefId int not null,
  Type int not null
)
  engine=InnoDB
;

