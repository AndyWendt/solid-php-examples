# Solid PHP Examples

[![Build Status](https://travis-ci.org/AndyWendt/solid_php_examples.svg?branch=master)](https://travis-ci.org/AndyWendt/solid_php_examples) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/AndyWendt/solid_php_examples/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/AndyWendt/solid_php_examples/?branch=master) [![Code Coverage](https://scrutinizer-ci.com/g/AndyWendt/solid_php_examples/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/AndyWendt/solid_php_examples/?branch=master) 

## Single Responsibility Principle

Entities should do one thing only and do it well.

## Open/Closed Principle

Entities should be open for extension but closed to modification.


## Liskov Substitution Principle

Derived classes must be substitutable for their base types.

A class that implements an interface should be able to be used anywhere that interface is type hinted.

The preconditions cannot be greater! (i.e. if a subtype one throws an exception but not the main then its preconditions are greater)

Really your @returns, @throws, input parameters, etc should be consistent throughout.

If it looks like a duck, quacks like a duck and needs batteries, you probably have the wrong abstraction.  


## Interface Segregation Principle

>Clients should not be forced to depend on methods that they do not use.

