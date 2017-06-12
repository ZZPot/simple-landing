
INSERT INTO `blocks` (`id`, `title`, `body`, `url`, `image`, `glyph`, `created`, `modified`) VALUES
(1, 'Pokemons', 'My body is rotten flesh.', '', 'http://media.istockphoto.com/vectors/black-and-white-seamless-pattern-with-funny-monsters-vector-id497545639', '', '2017-06-05 03:08:25', '2017-06-08 23:38:58'),
(2, 'Wallpapers', 'Haha, no body here.', '', 'http://img0.liveinternet.ru/images/attach/c/0/32/183/32183104_476090.gif', '', '2017-06-06 02:43:05', '2017-06-08 23:31:23'),
(3, 'News', 'Is it legal to leave comments like that?', 'medusa.io', 'http://uconstructor.com/_ld/10/54942870.jpg', '', '2017-06-08 23:30:36', '2017-06-08 23:30:36');


INSERT INTO `entries` (`id`, `block_id`, `title`, `body`, `url`, `image`, `glyph`, `created`, `modified`) VALUES
(1, 1, 'SlowPoke', 'Too slow', 'http://i2.kym-cdn.com/entries/icons/facebook/000/000/128/slowpoke_pokemon.jpg', 'http://i2.kym-cdn.com/entries/icons/facebook/000/000/128/slowpoke_pokemon.jpg', '', '2017-06-05 03:09:35', '2017-06-05 03:09:35'),
(2, 1, 'PikaChuunibyou', 'Pika-pika', 'http://vignette4.wikia.nocookie.net/pokemon/images/5/5f/025Pikachu_OS_anime_11.png/revision/latest?cb=20150717063951', 'http://vignette4.wikia.nocookie.net/pokemon/images/5/5f/025Pikachu_OS_anime_11.png/revision/latest?cb=20150717063951', '', '2017-06-05 03:10:39', '2017-06-05 03:10:39'),
(3, 2, 'Butterfly', '', 'https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-301332.jpg', 'https://alpha.wallhaven.cc/wallpapers/thumb/small/th-301332.jpg', '', '2017-06-06 02:44:44', '2017-06-06 02:44:44'),
(4, 2, 'Landscape', '', 'https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-201942.jpg', 'https://alpha.wallhaven.cc/wallpapers/thumb/small/th-201942.jpg', '', '2017-06-06 02:46:14', '2017-06-06 02:46:38'),
(5, 3, 'WAAAAAAAAR!', 'Des eez de vooo', 'https://meduza.io/feature/2017/06/08/aktivisty-vospolzovalis-uyazvimostyu-v-rabote-roskomnadzora-i-teper-blokiruyut-chuzhie-sayty-kak-eto-ustroeno', 'https://meduza.io/image/attachments/images/002/196/952/large/riEpJOfH_wNV7bdvz6prAw.jpg', '', '2017-06-08 23:45:46', '2017-06-08 23:46:00');

