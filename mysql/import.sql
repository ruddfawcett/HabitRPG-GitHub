SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `HabitRPGGitHub`
--

-- --------------------------------------------------------

--
-- Table structure for table `userInfo`
--

CREATE TABLE `userInfo` (
  `forUser` varchar(25) NOT NULL,
  `repoName` varchar(100) NOT NULL,
  `forEvery` bigint(20) NOT NULL default '3',
  `current` bigint(20) NOT NULL default '0',
  `direction` tinyint(4) NOT NULL default '1',
  `totalHabit` bigint(20) NOT NULL default '0',
  `totalCommits` bigint(20) NOT NULL default '0',
  `id` varchar(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(25) NOT NULL,
  `realName` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `userId` varchar(100) NOT NULL,
  `apiToken` varchar(100) NOT NULL,
  `alerts` text NOT NULL,
  `token` varchar(13) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;