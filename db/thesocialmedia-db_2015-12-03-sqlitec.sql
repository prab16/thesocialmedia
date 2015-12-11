

CREATE TABLE `activities` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT
)



CREATE TABLE `categories` (
  `id` INTEGER PRIMARY KEY ASC,
  `title` TEXT
) 


CREATE TABLE `comments` (
  `id` INTEGER PRIMARY KEY ASC,
  `comment` TEXT,
  `profile_id` INTEGER,
  `network_id` INTEGER
) 

CREATE TABLE `countries` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT
) 



CREATE TABLE `networks` (
  `id` INTEGER PRIMARY KEY ASC,
  `title` TEXT
)



CREATE TABLE `profiles` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT,
  `lastName` TEXT,
  `email` TEXT,
  `avatar` TEXT,
  `category_id` INTEGER,
  `user_id` INTEGER,
  `created` TEXT,
  `modified` TEXT,
  `state_id` INTEGER
) 



CREATE TABLE `profiles_activities` (
  `id` INTEGER PRIMARY KEY ASC,
  `profile_id` INTEGER,
  `activity_id` INTEGER
) 



CREATE TABLE `states` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT,
  `country_id` INTEGER
) 


CREATE TABLE `users` (
  `id` INTEGER PRIMARY KEY ASC,
  `username` TEXT,
  `password` TEXT,
  `role` TEXT,
  `email` TEXT,
  `created` TEXT,
  `modified` TEXT,
  `confirm` TEXT
) 





