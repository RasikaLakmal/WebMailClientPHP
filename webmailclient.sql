CREATE TABLE `maildata` (
  `id` int(11) NOT NULL,
  `receiver_email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maildata`
--
ALTER TABLE `maildata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maildata`
--
ALTER TABLE `maildata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
