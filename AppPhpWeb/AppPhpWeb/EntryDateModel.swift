//
//  EntryDateModel.swift
//  AppPhpWeb
//
//  Created by Gerd Richter on 19.03.16.
//  Copyright © 2016 wirelesscoder. All rights reserved.
//
//  container to store data from mysql-database

import Foundation

//class inherits NSObject
class EntryDateContainer : NSObject{
    
    //optional properties
    var nr: Int?
    var name: String?
    var entry: String?
    var begin: String?
    var end: String?
    
    //empty constructor
    override init() {
        
    }
    
    //constructor parameter @nr, @name, @entry, @begin, @end
    init(nr: Int, name: String, entry: String, begin: String, end: String) {
        
        self.nr = nr
        self.name = name
        self.entry = entry
        self.begin = begin
        self.end = end
    }
    
    //output current state 
    override var description: String {
        return "Nr: \(nr), name: \(name), entry: \(entry), begin: \(begin), end: \(end)"
    }
}
