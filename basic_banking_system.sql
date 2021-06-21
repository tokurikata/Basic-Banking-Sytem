CREATE TABLE `mini_statement` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini_statement`
--

INSERT INTO `mini_statement` (`sender`, `receiver`, `amount`) VALUES
('Mussa', 'Rishabh', 100),
('Pratik', 'Mitul', 50),
('Saket', 'Aniket', 200),
('Rishabh', 'Nipun', 100),
('Nipun', 'Pushpum', 110),
('Pushpum', 'Mussa', 110);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `amount`) VALUES
('Mussa', 'Mussa@gmail.com', 5000),
('Nipun', 'Nipun@gmail.com', 25000),
('Rishabh', 'Rishabh@gmail.com', 700),
('Pratik', 'Pratik@gmail.com', 1000),
('Shubham', 'Shubham@gmail.com', 4000),
('Lakhan', 'Lakhan@gmail.com', 15500),
('Pushpum', 'Pushpum@gmail.com', 6500),
('Mitul', 'Mitul@gmail.com', 3500),
('Saket', 'Saket@gmail.com', 1500),
('Aniket', 'Aniket@gmail.com', 900);
COMMIT;
