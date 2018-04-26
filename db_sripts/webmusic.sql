-- we don't know how to generate schema webmusic (class Schema) :(
create table baihat
(
	Id int(250) auto_increment
		primary key,
	TenBaiHat text collate utf8_unicode_ci not null,
	CaSi int(250) null,
	NhacSi int(250) null,
	TheLoai int(250) null,
	LuotNghe int not null,
	Album text collate utf8_unicode_ci not null,
	PlaylistId int not null,
	Audio text null,
	Lyric text null,
	LyricString text
)
engine=InnoDB charset=utf8
;

create table baihat_playlist
(
	BaiHat int not null,
	Playlist int not null
)
engine=InnoDB collate=utf8_unicode_ci
;

create table casi
(
	Id int(250) auto_increment
		primary key,
	TenCaSi text not null,
	NgaySinh date not null,
	QueQuan text not null,
	Hinh text not null,
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
	Id int(250) auto_increment
		primary key,
	TenChuDe text not null
)
engine=InnoDB charset=utf8
;

create table nhacsi
(
	Id int auto_increment
		primary key,
	TenNhacSi text not null
)
engine=InnoDB charset=utf8mb4
;

create table playlist
(
	Id int(250) auto_increment
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
	Id int(250) auto_increment
		primary key,
	TenTheLoai text not null
)
engine=InnoDB charset=utf8
;

create table user
(
	ID int(250) auto_increment
		primary key,
	UserName text not null,
	PassWord text not null,
	Email text not null,
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
	Id int(250) not null
		primary key,
	TenVideo text not null,
	CaSi int not null,
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
engine=InnoDB collate=utf8_unicode_ci
;

