

INSERT INTO `activities` (`id`, `name`) VALUES
(1, 'Gamer'),
(2, 'Danse'),
(3, 'Musculation'),
(4, 'Touriste');



INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Personnel'),
(2, 'Travail'),
(3, 'École');





INSERT INTO `comments` (`id`, `comment`, `profile_id`, `network_id`) VALUES
(1, 'sosa', 3, 1),
(2, 'commentaire', 3, 8),
(3, 'sa', 3, 21);






INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Canada'),
(2, 'United-States'),
(3, 'Mexico');





INSERT INTO `networks` (`id`, `title`) VALUES
(1, 'facebook'),
(2, 'gmail'),
(3, 'myspace'),
(5, 'Tencent QQ'),
(6, 'Tencent Qzone'),
(7, 'Google+'),
(8, 'Skype'),
(9, 'Twitter '),
(10, 'Line'),
(11, 'RenRen'),
(12, 'LinkedIn'),
(13, 'Instagram'),
(14, 'Nimbuzz'),
(15, 'Sina Weibo'),
(16, 'reddit'),
(17, 'VK'),
(18, 'Tumblr '),
(19, 'Tencent Weibo'),
(20, 'Tencent Qzone'),
(21, 'Other');






INSERT INTO `profiles` (`id`, `name`, `lastName`, `email`, `avatar`, `category_id`, `user_id`, `created`, `modified`, `state_id`) VALUES
(7, 'sosa', 'sosa', 'sosa@sosa.com', 'uploads/index.png', 1, 3, '2015-10-08', '2015-10-23', 2),
(15, 'd', 'd', 'dd@dd.com', '', 1, 3, '2015-10-23', '2015-10-23', 8),
(16, 's', 's', 's@s.com', '', 2, 3, '2015-10-30', '2015-10-30', 9),
(17, 's', 's', 's@s.com', 'uploads/Desert.jpg', 1, 3, '2015-10-30', '2015-10-30', 6);







INSERT INTO `profiles_activities` (`id`, `profile_id`, `activity_id`) VALUES
(1, 3, 2),
(2, 3, 3);





INSERT INTO `states` (`id`, `name`, `country_id`) VALUES
(1, 'Quebec', 1),
(2, 'Ontario', 1),
(3, 'Alberta', 1),
(4, 'Brirtish-Colombia', 1),
(5, 'Manitoba', 1),
(6, 'Kentucky', 2),
(7, 'Virginia', 2),
(8, 'Pennsylvania', 2),
(9, ' Massachusetts', 2),
(10, 'Alaska', 2),
(11, 'Chihuahua', 3),
(12, 'Sonora', 3),
(13, 'Coahuila', 3),
(14, 'Durango', 3),
(15, 'Oaxaca', 3),
(16, 'Colima', 3);






INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `created`, `modified`, `confirm`) VALUES
(3, 'admin', '$2a$10$ND9oKB4xAIvdtpmOg0pSZeYorJiI5rAPLuIbgIc0W/RmTkpN0lVSq', 'admin', 'admin@admin.com', '2015-09-10', '2015-09-10', ''),
(4, 'profile1', '$2a$10$7z0cBE2unN0EvAVtM/JvJuQS32w4a1pME8koylSW.X38TXD9UXpoi', 'admin', 'profile1@profile1.com', '2015-09-10', '2015-09-10', ''),
(5, 'profile2', '$2a$10$hNy/MQdcHjV691BgQAU0q.JfZQ6Wgu0yz1J2Oe7rk.48vjmc45ve6', 'profile', 'profile2@profile2.com', '2015-09-10', '2015-09-10', ''),
(6, 'profile4', '$2a$10$4oqhhud.aVNsiZlvMfWLH.zLJSXGwGeKJyYLdLnRFpzbSej6Xuhu.', 'profile', 'profile4@profile4.com', '2015-09-10', '2015-09-10', ''),
(7, 'sosa', '$2a$10$5EgGZDh5Cr2xBCY6mEvOROWRSSOHVkHXNsCeMomU4y0BN6sxWyMmG', 'profile', 'sosa@sosa.com', '2015-09-17', '2015-09-17', ''),
(10, 's', '$2a$10$lKsC35ZG7vj06ZRSH91k6.mIExevAcWOWB33z5mmUhxm4zgR4qHVa', 'profile', 's@s.com', '2015-10-23', '2015-10-23', '0'),
(11, 'h', '$2a$10$QDITmLIRErS0A3WQjjrOFeCoB4fNecdQaXaKPTqjfB8HlBix0RRE.', 'utilisateur', 'prab16@gmail.com', '2015-10-23', '2015-10-23', '1'),
(12, 'y', '$2a$10$CAv3QzYbHCBH/gUFU.gfe.DQEXrhZSp4kHInP.ymwwNm.i1M6VPD.', 'utilisateur', 'prab16@gmail.com', '2015-10-23', '2015-10-23', '0'),
(13, 's', '$2a$10$yPNRSGz6SAto2JWYFLVOmecasTH6IYnKXQWIKLwJrKPkRJj1jswxm', 'utilisateur', 's@sp.com', '2015-10-30', '2015-10-30', '0'),
(14, 'x', '$2a$10$iHzelLoCTBFDpeHJCvLAwuDict3dRfFNRT63nCs1rqret/z9lZm/a', 'utilisateur', 'prab16@gmail.com', '2015-10-30', '2015-10-30', '0'),
(15, 'x', '$2a$10$YWvLEgfYPk7ndaPWdUHd0.spHYqjtdk3cYwpbq8XxyNAvgj3FKF86', 'utilisateur', 'prab16@gmail.com', '2015-10-30', '2015-10-30', '0'),
(16, 'testuser', '$2a$10$8EC2lHTun65Fj6vj74V9DOd3IvMxIEi/EbSUEJQ6cYJmxRijKfXSu', 'utilisateur', 'prab12@hotmail.com', '2015-12-03', '2015-12-03', '1');


