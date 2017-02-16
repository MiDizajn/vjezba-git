print "Vase Ime: "
user_input = gets.chomp
user_input.downcase!

if user_input.include? "s"
  user_input.gsub!(/s/, "d")
else
  puts "Nema S u rijeci"
end

puts "Vase ime je sada: #{user_input}" 
