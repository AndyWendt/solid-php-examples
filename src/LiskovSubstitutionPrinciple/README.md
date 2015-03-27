Derived classes must be substitutable for their base types.

So a class that implements an interface should be able to be used anywhere that interface is type hinted.

The preconditions cannot be greater! (i.e. if a subtype one throws an exception but not the main then its preconditions are greater)

Really your @returns, @throws, etc should be consistent throughout.

