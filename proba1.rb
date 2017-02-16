print "Vase Ime: "
user_input = gets.chomp
user_input.downcase!

if user_input.include? "k"
  user_input.gsub!(/k/, "f")
else
  puts "Nema K u rijeci"
end

puts "Vase ime je sada: #{user_input}"
